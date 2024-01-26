@extends('layouts.master')
@section('main-content')
@section('page-css')
@endsection

<div class="breadcrumb">
    <h1>{{ __('translate.Edit_Member') }}</h1>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="row" id="section_edit_client">
    <div class="col-lg-12 mb-3">
        <div class="card">

            <form @submit.prevent="Update_Client()">
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md-4">
                            <label for="username">{{ __('translate.FullName') }} <span
                                    class="field_required">*</span></label>
                            <input type="text" v-model="client.username" class="form-control"
                                name="username" id="username" placeholder="{{ __('translate.FullName') }}">
                            <span class="error" v-if="errors && errors.username">
                                @{{ errors.username[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nid">{{ __('translate.NID_Number') }}</label>
                            <input type="text" v-model="client.nid" class="form-control" id="nid" name="nid"
                                placeholder="{{ __('translate.Enter_NID_Number') }}">
                            <span class="error" v-if="errors && errors.nid">
                                @{{ errors.nid[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Phone">{{ __('translate.TelePhone') }}</label>
                            <input type="text" v-model="client.telephone" class="form-control" id="Telephone"
                                placeholder="{{ __('translate.Enter_Telephone') }}">
                            <span class="error" v-if="errors && errors.Telephone">
                                @{{ errors.Telephone[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Phone">{{ __('translate.Phone') }}</label>
                            <input type="text" v-model="client.phone" class="form-control" id="Phone"
                                placeholder="{{ __('translate.Enter_Phone') }}">
                            <span class="error" v-if="errors && errors.phone">
                                @{{ errors.phone[0] }}
                            </span>
                        </div>


                        <div class="form-group col-md-4">
                            <label for="whatsapp">{{ __('translate.WhatsApp_Number') }}</label>
                            <input type="text" v-model="client.whatsapp" class="form-control" id="whatsapp"
                                placeholder="{{ __('translate.Enter_WhatsApp_Number') }}">
                            <span class="error" v-if="errors && errors.whatsapp">
                                @{{ errors.whatsapp[0] }}
                            </span>
                        </div>


                        <div class="form-group col-md-4">
                            <label for="email">{{ __('translate.Email') }}</label>
                            <input type="text" v-model="client.email" class="form-control" id="email" placeholder="{{ __('translate.Enter_email_address') }}">
                            <span class="error" v-if="errors && errors.email">
                                @{{ errors.email[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="membershipNumber">{{ __('translate.Membership_Number') }}</label>
                            <input type="text" v-model="client.membershipNumber" class="form-control" id="membershipNumber" placeholder="{{ __('translate.Enter_Membership_Number') }}">
                            <span class="error" v-if="errors && errors.membershipNumber">
                                @{{ errors.membershipNumber[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="membershipCardNumber">{{ __('translate.Membership_Card_Number') }}</label>
                            <input type="text" v-model="client.membershipCardNumber" class="form-control" id="membershipCardNumber" placeholder="{{ __('translate.Enter_Membership_Card_Number') }}">
                            <span class="error" v-if="errors && errors.membershipCardNumber">
                                @{{ errors.membershipCardNumber[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="memberCategory">{{ __('translate.Members_Category') }}</label>
                            <select v-model="client.memberCategory" class="form-control" id="memberCategory">
                                <option value="" selected disabled> {{ __('translate.Select_members_category') }}</option>
                                <option value="Police Service">{{ __('translate.Police_Service') }}</option>
                                <option value="Platinum">{{ __('translate.Platinum') }}</option>
                                <option value="Donar">{{ __('translate.Donar') }}</option>
                                <option value="General">{{ __('translate.General') }}</option>
                                <option value="Govt. Service">{{ __('translate.Govt_Service') }}</option>
                            </select>
                            <span class="error" v-if="errors && errors.memberCategory">
                                @{{ errors.memberCategory[0] }}
                            </span>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="presentAddress">{{ __('translate.Present_Address') }}</label>
                            <textarea v-model="client.presentAddress" class="form-control" name="presentAddress"
                                id="presentAddress" placeholder="{{ __('translate.Enter_Present_Address') }}"></textarea>
                            <span class="error" v-if="errors && errors.presentAddress">
                                @{{ errors.presentAddress[0] }}
                            </span>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="permanentAddress">{{ __('translate.Permanent_Address') }}</label>
                            <textarea v-model="client.permanentAddress" class="form-control" name="permanentAddress"
                                id="permanentAddress" placeholder="{{ __('translate.Enter_Permanent_Address') }}"></textarea>
                            <span class="error" v-if="errors && errors.permanentAddress">
                                @{{ errors.permanentAddress[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="fathersName">{{ __('translate.Fathers_name') }}</label>
                            <input type="text" v-model="client.fathersName" class="form-control" id="fathersName"
                                name="fathersName" placeholder="{{ __('translate.Enter_fathers_name') }}">
                            <span class="error" v-if="errors && errors.fathersName">
                                @{{ errors.fathersName[0] }}
                            </span>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mothersName">{{ __('translate.Mothers_name') }}</label>
                            <input type="text" v-model="client.mothersName" class="form-control" id="mothersName"
                                name="mothersName" placeholder="{{ __('translate.Enter_mothers_name') }}">
                            <span class="error" v-if="errors && errors.mothersName">
                                @{{ errors.mothersName[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="dob">{{ __('translate.Date_of_Birth') }}</label>
                            <input type="date" v-model="client.dateOfBirth" class="form-control" id="dob"
                                placeholder="{{ __('translate.Enter_Date_of_Birth') }}">
                            <span class="error" v-if="errors && errors.dateOfBirth">
                                @{{ errors.dateOfBirth[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="passportNumber">{{ __('translate.Passport_Number') }}</label>
                            <input type="text" v-model="client.passportNumber" class="form-control" id="passportNumber"
                                placeholder="{{ __('translate.Enter_Passport_Number') }}">
                            <span class="error" v-if="errors && errors.passportNumber">
                                @{{ errors.passportNumber[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="maritalStatus">{{ __('translate.Marital_Status') }}</label>
                            <select v-model="client.maritalStatus" class="form-control" id="maritalStatus">
                                <option value="" selected disabled>{{ __('translate.Select_Marital_Status') }}</option>
                                <option value="single">{{ __('translate.Single') }}</option>
                                <option value="married">{{ __('translate.Married') }}</option>
                                <option value="divorced">{{ __('translate.Divorced') }}</option>
                                <option value="widowed">{{ __('translate.Widowed') }}</option>
                                <!-- Add more options if needed -->
                            </select>
                            <span class="error" v-if="errors && errors.maritalStatus">
                                @{{ errors.maritalStatus[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="photo">{{ __('translate.Image') }}</label>
                            <input name="photo" @change="changePhoto" type="file" class="form-control"
                                id="photo">
                            <span class="error" v-if="errors && errors.photo">
                                @{{ errors.photo[0] }}
                            </span>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" style="text-align: center;">Name</th>
                                            <th>Age</th>
                                            <th>Profession</th>
                                            <th>Card No</th>
                                            <th>Photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Spouse</td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.spouseName" class="form-control" id="clientSpouseName">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.spouseAge" class="form-control" id="clientSpouseAge">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.spouseProfession" class="form-control" id="clientSpouseProfession">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.spouseCardNumber" class="form-control" id="spouseCardNumber">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input name="spousePhoto" @change="changeSpousePhoto" type="file" class="form-control" id="spousePhoto">
                                                        <span class="error" v-if="errors && errors.spousePhoto">
                                                            @{{ errors.spousePhoto[0] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Child 1</td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child1Name" class="form-control" id="clientChild1Name">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child1Age" class="form-control" id="clientChild1Age">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child1Profession" class="form-control" id="clientChild1Profession">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child1CardNumber" class="form-control" id="child1CardNumber">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input name="child1Photo" @change="changeChild1Photo" type="file" class="form-control" id="child1Photo">
                                                        <span class="error" v-if="errors && errors.child1Photo">
                                                            @{{ errors.child1Photo[0] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Child 2</td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child2Name" class="form-control" id="clientChild2Name">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child2Age" class="form-control" id="clientChild2Age">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child2Profession" class="form-control" id="clientChild2Profession">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child2CardNumber" class="form-control" id="child2CardNumber">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input name="child2Photo" @change="changeChild2Photo" type="file" class="form-control" id="child2Photo">
                                                        <span class="error" v-if="errors && errors.child2Photo">
                                                            @{{ errors.child2Photo[0] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Child 3</td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child3Name" class="form-control" id="clientChild3Name">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child3Age" class="form-control" id="clientChild3Age">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child3Profession" class="form-control" id="clientChild3Profession">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child3CardNumber" class="form-control" id="child3CardNumber">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input name="child3Photo" @change="changeChild3Photo" type="file" class="form-control" id="child3Photo">
                                                        <span class="error" v-if="errors && errors.child3Photo">
                                                            @{{ errors.child3Photo[0] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Child 4</td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child4Name" class="form-control" id="clientChild4Name">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child4Age" class="form-control" id="clientChild4Age">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child4Profession" class="form-control" id="clientChild4Profession">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" v-model="client.child4CardNumber" class="form-control" id="child4CardNumber">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input name="child4Photo" @change="changeChild4Photo" type="file" class="form-control" id="child4Photo">
                                                        <span class="error" v-if="errors && errors.child4Photo">
                                                            @{{ errors.child4Photo[0] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="bloodGroup">{{ __('translate.Blood_Group') }}</label>
                            <input type="text" v-model="client.bloodGroup" class="form-control" id="bloodGroup"
                                placeholder="{{ __('translate.Enter_Blood_Group') }}">
                            <span class="error" v-if="errors && errors.bloodGroup">
                                @{{ errors.bloodGroup[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="religion">{{ __('translate.Religion') }}</label>
                            <select v-model="client.religion" class="form-control" id="religion">
                                <option value="">{{ __('translate.Select_Religion') }}</option>
                                <option value="islam">{{ __('translate.Islam') }}</option>
                                <option value="christianity">{{ __('translate.Christianity') }}</option>
                                <option value="hinduism">{{ __('translate.Hinduism') }}</option>
                                <option value="buddhism">{{ __('translate.Buddhism') }}</option>
                                <!-- Add more options if needed -->
                            </select>
                            <span class="error" v-if="errors && errors.religion">
                                @{{ errors.religion[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="emergencyContact">{{ __('translate.Emergency_Contact_Number') }}</label>
                            <input type="text" v-model="client.emergencyContact" class="form-control" id="emergencyContact" placeholder="{{ __('translate.Enter_Emergency_Contact_Number') }}">
                            <span class="error" v-if="errors && errors.emergencyContact">
                                @{{ errors.emergencyContact[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="interests">{{ __('translate.Area_of_Interest') }}</label>
                            <textarea v-model="client.interests" class="form-control" id="interests" placeholder="{{ __('translate.Enter_Area_of_Interest') }}"></textarea>
                            <span class="error" v-if="errors && errors.interests">
                                @{{ errors.interests[0] }}
                            </span>
                        </div>

                        <div class="form-group">
                            <h4 style="padding-bottom:0px;margin-bottom:0px; ">{{ __('translate.Professional_Details') }}</h4>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="designation">{{ __('translate.Designation') }}</label>
                            <input type="text" v-model="client.designation" class="form-control" id="designation" placeholder="{{ __('translate.Enter_Designation') }}">
                            <span class="error" v-if="errors && errors.designation">
                                @{{ errors.designation[0] }}
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="institution">{{ __('translate.Institution') }}</label>
                            <input type="text" v-model="client.institution" class="form-control" id="institution" placeholder="{{ __('translate.Enter_Institution') }}">
                            <span class="error" v-if="errors && errors.institution">
                                @{{ errors.institution[0] }}
                            </span>
                        </div>

                        <div class="form-group">
                            <h4 style="padding-bottom:0px;margin-bottom:0px; ">{{ __('translate.Community_Engagement_Details') }}</h4>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="otherClubMembership">{{ __('translate.Membership_in_other_clubs') }}</label>
                            <input type="text" v-model="client.otherClubMembership" class="form-control" id="otherClubMembership" placeholder="{{ __('translate.Enter_Club_Membership') }}">
                            <span class="error" v-if="errors && errors.otherClubMembership">
                                @{{ errors.otherClubMembership[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="socialActivity">{{ __('translate.Social_Activity_Community_Service') }}</label>
                            <input type="text" v-model="client.socialActivity" class="form-control" id="socialActivity" placeholder="{{ __('translate.Enter_Social_Activity') }}">
                            <span class="error" v-if="errors && errors.socialActivity">
                                @{{ errors.socialActivity[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="joinClubReason">{{ __('translate.Reason_for_Joining_Club') }}</label>
                            <textarea v-model="client.joinClubReason" class="form-control" id="joinClubReason" placeholder="{{ __('translate.Enter_Reason_for_Joining') }}"></textarea>
                            <span class="error" v-if="errors && errors.joinClubReason">
                                @{{ errors.joinClubReason[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="paymentMode">{{ __('translate.Mode_of_Payment') }}</label>
                            <select v-model="client.paymentMode" class="form-control" id="paymentMode">
                                <option value="" selected disabled> {{ __('translate.Select_mode_of_payment') }}</option>
                                <option value="Cash">{{ __('translate.Cash') }}</option>
                                <option value="Cheque">{{ __('translate.Cheque') }}</option>
                                <option value="Debit/Credit Card">{{ __('translate.Debit_Credit_Card') }}</option>
                                <option value="Bank Transfer">{{ __('translate.Bank_Transfer') }}</option>
                            </select>
                            <span class="error" v-if="errors && errors.paymentMode">
                                @{{ errors.paymentMode[0] }}
                            </span>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="paymentDetails">{{ __('translate.Payment_Details') }}</label>
                            <input type="text" v-model="client.paymentDetails" class="form-control" id="paymentDetails" placeholder="{{ __('translate.Enter_Payment_Details') }}">
                            <span class="error" v-if="errors && errors.paymentDetails">
                                @{{ errors.paymentDetails[0] }}
                            </span>
                        </div>

                    </div>

                    <div class="row mt-3">

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" :disabled="SubmitProcessing">
                                <span v-if="SubmitProcessing" class="spinner-border spinner-border-sm"
                                    role="status" aria-hidden="true"></span> <i class="i-Yes me-2 font-weight-bold"></i>
                                {{ __('translate.Submit') }}
                            </button>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('page-js')

<script>
    Vue.component('v-select', VueSelect.VueSelect)

    var app = new Vue({
        el: '#section_edit_client',
        data: {
            editmode: false,
            SubmitProcessing:false,
            errors:[],
            client: @json($client),
            data: new FormData(),
            old_photo:@json($client->photo),
            old_spouse_photo:@json($client->spousePhoto),
            old_child1photo:@json($client->child1Photo),
            old_child2photo:@json($client->child2Photo),
            old_child3photo:@json($client->child3Photo),
            old_child4photo:@json($client->child4Photo),
        },

        methods: {

            // Selected_Status(value) {
            //     if (value === null) {
            //         this.client.status = 1;
            //     }
            // },


            changePhoto(e){
                let file = e.target.files[0];
                this.client.photo = file;
            },
            changeSpousePhoto(e){
                let file = e.target.files[0];
                this.client.spousePhoto = file;
            },
            changeChild1Photo(e){
                let file = e.target.files[0];
                this.client.child1Photo = file;
            },
            changeChild2Photo(e){
                let file = e.target.files[0];
                this.client.child1Photo = file;
            },
            changeChild3Photo(e){
                let file = e.target.files[0];
                this.client.child1Photo = file;
            },
            changeChild4Photo(e){
                let file = e.target.files[0];
                this.client.child1Photo = file;
            },


            //----------------------- Update_Client ---------------------------\\
            Update_Client() {
                var self = this;
                self.SubmitProcessing = true;
                self.data.append("username", self.client.username);
                self.data.append("status", self.client.status);
                self.data.append("email", self.client.email);
                self.data.append("city", self.client.city);
                self.data.append("phone", self.client.phone);
                self.data.append("photo", self.client.photo);
                self.data.append("address", self.client.address);
                self.data.append("whatsapp", self.client.whatsapp);
                self.data.append("nid", self.client.nid);
                self.data.append("telephone", self.client.telephone);
                self.data.append("presentAddress", self.client.presentAddress);
                self.data.append("permanentAddress", self.client.permanentAddress);
                self.data.append("fathersName", self.client.fathersName);
                self.data.append("mothersName", self.client.mothersName);
                self.data.append("dateOfBirth", self.client.dateOfBirth);
                self.data.append("passportNumber", self.client.passportNumber);
                self.data.append("maritalStatus", self.client.maritalStatus);
                self.data.append("spouseName", self.client.spouseName);
                self.data.append("spouseAge", self.client.spouseAge);
                self.data.append("spouseProfession", self.client.spouseProfession);
                self.data.append("spouseCardNumber", self.client.spouseCardNumber);
                self.data.append("spousePhoto", self.client.spousePhoto);

                self.data.append("child1Name", self.client.child1Name);
                self.data.append("child1Age", self.client.child1Age);
                self.data.append("child1Profession", self.client.child1Profession);
                self.data.append("child1CardNumber", self.client.child1CardNumber);
                self.data.append("child1Photo", self.client.child1Photo);

                self.data.append("child2Name", self.client.child2Name);
                self.data.append("child2Age", self.client.child2Age);
                self.data.append("child2Profession", self.client.child2Profession);
                self.data.append("child2CardNumber", self.client.child2CardNumber);
                self.data.append("child2Photo", self.client.child2Photo);

                self.data.append("child3Name", self.client.child3Name);
                self.data.append("child3Age", self.client.child3Age);
                self.data.append("child3Profession", self.client.child3Profession);
                self.data.append("child3CardNumber", self.client.child3CardNumber);
                self.data.append("child3Photo", self.client.child3Photo);

                self.data.append("child4Name", self.client.child4Name);
                self.data.append("child4Age", self.client.child4Age);
                self.data.append("child4Profession", self.client.child4Profession);
                self.data.append("child4CardNumber", self.client.child4CardNumber);
                self.data.append("child4Photo", self.client.child4Photo);

                self.data.append("bloodGroup", self.client.bloodGroup);
                self.data.append("religion", self.client.religion);
                self.data.append("emergencyContact", self.client.emergencyContact);
                self.data.append("interests", self.client.interests);
                self.data.append("designation", self.client.designation);
                self.data.append("institution", self.client.institution);
                self.data.append("otherClubMembership", self.client.otherClubMembership);
                self.data.append("socialActivity", self.client.socialActivity);
                self.data.append("joinClubReason", self.client.joinClubReason);
                self.data.append("membershipNumber", self.client.membershipNumber);
                self.data.append("membershipCardNumber", self.client.membershipCardNumber);
                self.data.append("memberCategory", self.client.memberCategory);
                self.data.append("paymentMode", self.client.paymentMode);
                self.data.append("paymentDetails", self.client.paymentDetails);

                if(self.old_photo != self.client.photo){
                    self.data.append("photo", self.client.photo);
                }
                if(self.old_spouse_photo != self.client.spousePhoto){
                    self.data.append("spousePhoto", self.client.spousePhoto);
                }
                if(self.old_child1photo != self.client.child1Photo){
                    self.data.append("child1Photo", self.client.child1Photo);
                }
                if(self.old_child2photo != self.client.child2Photo){
                    self.data.append("child2Photo", self.client.child2Photo);
                }
                if(self.old_child3photo != self.client.child3Photo){
                    self.data.append("child3Photo", self.client.child3Photo);
                }
                if(self.old_child4photo != self.client.child4Photo){
                    self.data.append("child4Photo", self.client.child4Photo);
                }


                self.data.append("_method", "put");

                axios
                    .post("/people/clients/" + this.client.id, self.data)
                    .then(response => {
                        self.SubmitProcessing = false;
                        window.location.href = '/people/clients';
                        toastr.success('{{ __('translate.Updated_in_successfully') }}');
                        self.errors = {};
                    })
                    .catch(error => {
                        self.SubmitProcessing = false;
                        if (error.response.status == 422) {
                            self.errors = error.response.data.errors;
                        }
                        toastr.error('{{ __('translate.There_was_something_wronge') }}');
                    });
            },

        },
        //-----------------------------Autoload function-------------------
        created() {
        }
    })
</script>

@endsection
