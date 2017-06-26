<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="banner_1">
    <div class="container">
        <div id="search_wrapper1">
            <div id="search_form" class="clearfix">
                <h1>Start your job search</h1>
                <p>
                    <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                    <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <div class="form-container">
            <h2>Register Form</h2>
            <form>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="firstName">First Name</label>
                        <div class="col-md-9">
                            <input type="text" path="firstName" id="firstName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                        <div class="col-md-9">
                            <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="sex">Sex</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" name="sex" class="icheck" checked> Male
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" name="sex" class="icheck"> Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="dob">Date of birth</label>
                        <div class="col-md-9">
                            <input type="text" path="dob" id="dob" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="email">Email</label>
                        <div class="col-md-9">
                            <input type="text" path="email" id="email" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="country">Country</label>
                        <div class="col-md-9">
                            <select path="country" id="country" class="form-control input-sm">
                                <option value="">Select Country</option>
                                <option value="">Japan</option>
                                <option value="">Kenya</option>
                                <option value="">Dubai</option>
                                <option value="">Italy</option>
                                <option value="">Greece</option>
                                <option value="">Iceland</option>
                                <option value="">China</option>
                                <option value="">Doha</option>
                                <option value="">Irland</option>
                                <option value="">Srilanka</option>
                                <option value="">Russia</option>
                                <option value="">Hong Kong</option>
                                <option value="">Germany</option>
                                <option value="">Canada</option>
                                <option value="">Mexico</option>
                                <option value="">Nepal</option>
                                <option value="">Norway</option>
                                <option value="">Oman</option>
                                <option value="">Pakistan</option>
                                <option value="">Kuwait</option>
                                <option value="">Indonesia</option>
                                <option value="">Spain</option>
                                <option value="">Thailand</option>
                                <option value="">Saudi Arabia</option>
                                <option value="">Poland</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="country">Work Experience</label>
                        <div class="col-md-9">
                            <select path="country" id="country" class="form-control input-sm">
                                <option value="">Select</option>
                                <option value="">Fresher</option>
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                                <option value="">13</option>
                                <option value="">14</option>
                                <option value="">15</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="country">Education</label>
                        <div class="col-md-9">
                            <select path="country" id="country" class="form-control input-sm">
                                <option value="">Select</option>
                                <option value="">Bsc</option>
                                <option value="">BTech</option>
                                <option value="">Mca</option>
                                <option value="">BCA</option>
                                <option value="">Diploma</option>
                                <option value="">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="subjects">Subjects</label>
                        <div class="col-md-9 sm_1">
                            <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-actions floatRight">
                        <input type="submit" value="Register" class="btn btn-primary btn-sm">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>