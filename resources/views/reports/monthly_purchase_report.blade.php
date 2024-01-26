

<div class="">
    <div class="table-responsive">
        <table id="manage_all" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Date</th>
                @foreach ($uniqueCategories as $category)
                    <th>{{ $category }}</th>
                @endforeach
                <th> Net Amount </th>
            </tr>
            </thead>
            <tbody>
                @php
                    $startOfMonth = \Carbon\Carbon::parse($month_name)->startOfMonth();
                    $endOfMonth = \Carbon\Carbon::parse($month_name)->endOfMonth();
                @endphp
                @php
                    $columnSums = [];

                    foreach ($uniqueCategories as $category) {
                        $columnSums[$category] = 0;
                    }

                    $totalRowAmount = 0;
                @endphp

                @for ($i = $startOfMonth; $i < $endOfMonth; $i->addDay())
                    @php
                        $dailyTotal = 0;
                        $amountsByDate = $products->where('purchase_date', $i->format('Y-m-d'));

                        foreach ($uniqueCategories as $category) {
                            $filteredByCategory = $amountsByDate->where('category_name', $category);
                            $amountValue = $filteredByCategory->sum('total_amount');
                            $dailyTotal += intval($amountValue);
                            $columnSums[$category] += intval($amountValue);
                        }
                    @endphp
                    @php
                        $rowTotal = 0;
                        $amount = $products->where('purchase_date',$i->format('Y-m-d'))->first();
                    @endphp
                    <tr>
                        <td class="day">{{ $i->format('Y-m-d') }}</td>
                        @foreach ($uniqueCategories as $category)
                            @php
                                $amount = $products->where('purchase_date',$i->format('Y-m-d'))->where('category_name',$category)->first();
                                if ($amount != null) {
                                    $rowTotal = $rowTotal + intval($amount["total_amount"]);
                                }
                            @endphp
                            <td>{{ $amount["total_amount"] ?? ' ' }}</td>
                        @endforeach
                        <td>{{ $rowTotal }}</td>
                        @php
                            $totalRowAmount = $totalRowAmount + $rowTotal;
                            $rowTotal = 0;
                        @endphp
                    </tr>
                @endfor


                <!-- Displaying sums for each category -->
                <tr>
                    <td>Total</td>
                    @foreach ($uniqueCategories as $category)
                        <td>{{ $columnSums[$category] }}</td>
                    @endforeach
                    <td>{{ $totalRowAmount }}</td> <!-- Assuming the total of row totals isn't required -->
                </tr>



            </tbody>
        </table>
    </div>
</div>

<style>
    #summery td {
        font-size: 14px;
        font-weight: bold;
    }

</style>



<script>
    $(document).ready(function () {

        table = $('#manage_all').DataTable({
            dom: "<'row'<'col-md-12'f>>" +
            "<'row'<'col-md-12'B>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-12'>>",

            "lengthMenu": [[-1], ["All"]],

            "autoWidth": true,
            "scrollX": false,
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-table"> EXCEL </i>',
                    titleAttr: 'Excel',
                    exportOptions: {
                        columns: ':visible:not(.not-exported)'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: "Monthly Purchases Summery ({{$month_name}})",
                    text: '<i class="fa fa-file-pdf-o"> PDF</i>',
                    titleAttr: 'PDF',
                    orientation: 'landscape',
                    filename: 'Monthly_purchases_report_{{$month_name}}',
                    exportOptions: {
                        columns: ':visible'
                    },
                    customize: function (doc) {

                        doc.content[1].layout = {
                            hLineWidth: function(i, node) {
                                return 0.5; // Set horizontal line width
                            },
                            vLineWidth: function(i, node) {
                                return 0.5; // Set vertical line width
                            },
                            hLineColor: function(i, node) {
                                return '#000'; // Set horizontal line color
                            },
                            vLineColor: function(i, node) {
                                return '#000'; // Set vertical line color
                            }
                        };
                        // Set table width to auto-fill
                        doc.content[1].table.widths = Array(table.columns().header().length).fill('*');

                        // Set alignments
                        doc.content[0].alignment = 'center'; // Title alignment
                        doc.content[1].alignment = 'center'; // Table alignment

                        // Set page size and orientation
                        doc.pageSize = 'A4';
                        doc.pageOrientation = 'portrait';
                        doc.content[1].table.headerRows = 0;
                        doc.pageMargins = [20, 10, 10, 10];
                        doc.defaultStyle.fontSize = 10;
                        doc.styles.tableHeader.fontSize = 10;
                        doc.styles.title.fontSize = 12;

                        console.log(doc.content[1].table.body);

                        // Custom styles for table borders and cell height
                        doc.content[1].table.body.forEach(function(row, rowIndex) {
                            row.forEach(function(cell, cellIndex) {
                                cell.border = [1, 1, 1, 1]; // Border on all sides of each cell
                                cell.lineHeight = 1.9; // Adjust cell height as needed
                                cell.borderColor = '#000';
                                cell.fillColor = '';
                                cell.textColor = '#000';
                            });

                        });
                        doc.content[1].table.body[0].forEach(function(cell) {
                            cell.fillColor = ''; // Set header text color to black
                            cell.color = '#000'; // Set header text color to black
                            // You might need to adjust additional properties here based on your PDF generation library or requirements
                        });
                        doc['footer'] = (function (page, pages) {
                            return {
                                columns: [
                                    'CMP Officers Club',
                                    {
                                        // This is the right column
                                        alignment: 'right',
                                        text: ['page ', {text: page.toString()}, ' of ', {text: pages.toString()}]
                                    }
                                ],
                                margin: [10, 0]
                            }
                        });
                    }
                },
                {
                    extend: 'print',
                    orientation: 'landscape',
                    title: "<div class='text-center'>CMP Officers Club</div>",
                    text: '<i class="fa fa-print"> PRINT </i>',
                    titleAttr: 'Print',
                    exportOptions: {
                        columns: ':visible'
                    }

                }, {
                    extend: 'colvis',
                    text: '<i class="fa fa-eye-slash"> Column Visibility </i>',
                    titleAttr: 'Visibility'
                }

            ],

            "oSelectorOpts": {filter: 'applied', order: "current"},
            language: {
                buttons: {},

                "emptyTable": "<strong style='color:#ff0000'> Sorry!!! No Records have found </strong>",
                "search": "",
                "paginate": {
                    "next": "Next",
                    "previous": "Previous"
                },

                "zeroRecords": ""
            }
        });


        $('.dataTables_filter input[type="search"]').attr('placeholder', 'Type here to search...').css({'width': '220px'});

        $('[data-toggle="tooltip"]').tooltip();

    });
</script>
