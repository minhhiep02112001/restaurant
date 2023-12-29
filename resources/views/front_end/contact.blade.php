@extends('front_end._index')
@section('content')
    <style>
        .news-title {
            width: 360px;
            margin: -25px auto 0;
            position: relative;
        }

        #page .container {
            max-width: 1052px;
        }

        .page-news-menu,
        .full-bg,
        .space {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            padding-left: 10px;
            padding-right: 10px;
        }


        .compact-form-label {
            position: absolute;
            top: 1px;
            left: 5px;
            z-index: 1;
            font-size: 16px;
        }

        .form-item.form-type-radio.form-item-submitted-do-you-require-a-response {
            display: flex;
            align-content: center;
        }

        .form-item.form-type-radio.form-item-submitted-do-you-require-a-response input {
            margin: 0px 10px;
            padding: 0px;
        }

        .form-item.form-type-radio.form-item-submitted-do-you-require-a-response label {
            margin: 0px;
            padding: 0px;
        }

        input.form-text {
            height: 40px;
            font-size: 15px;
            padding: 10px;
            max-width: 100%;
        }

        .compact-form-wrapper {
            margin: 28px 0;
        }

        .form-item label {
            font-weight: 700;
        }


        .webform-component select {
            height: 40px;
            font-size: 15px;
            padding: 10px;
        }

        .form-item {}

        .compact-form-wrapper {
            position: relative;
            text-align: left;
        }

        .form-item label {
            font-weight: 700;
        }

        .form-item,
        .form-actions {
            margin-top: 1em;
            margin-bottom: 1em;
        }

        .form-item label {
            font-weight: 700;
        }

        label {
            display: block;
            font-weight: bold;
        }

        .form-checkboxes .form-item,
        .form-radios .form-item {}

        .news-title h1 {
            text-align: center;
            background-color: #d02b2e;
            color: #fff;
            padding: 17px 0;
            font-size: 40px;
            font-family: "montserratregular", Arial, Helvetica, sans-serif;
        }

        .webform-submit {
            background: #d02b2e;
            color: #FFFFFF;
            text-transform: uppercase;
            padding: 10px 15px;
            border: none;
            display: block;
            font-family: "montserratregular";
        }

        .form-submit {}

        input[type="checkbox"],
        input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
            *height: 13px;
            *width: 13px;
        }

        input.form-checkbox,
        input.form-radio {
            vertical-align: middle;
        }

        .form-checkboxes .form-item,
        .form-radios .form-item {
            margin-top: 0.4em;
            margin-bottom: 0.4em;
        }


        label {
            display: block;
            font-weight: bold;
        }
    </style>
    <div class="content-inner" id="page">
        <!-- !Main Content -->
        <div class="region region-page-header">
            <div class="region-inner clearfix">
                <div id="block-fieldblock-node-webform-default-field-page-image" class="block block-fieldblock no-title">
                    <div class="block-inner clearfix">

                        <div class="block-content content">
                            <div
                                class="field field-name-field-page-image field-type-image field-label-hidden view-mode-full">
                                <div class="field-items">
                                    <figure class="clearfix field-item even"><noscript
                                            class="adaptive-image adaptive-image-processed"
                                            data-adaptive-image-breakpoints="700 880"
                                            data-adaptive-image-700-img="<img class=&quot;adaptive-image image-style-mobile-header&quot; data-adaptive-image-breakpoint=&quot;700&quot; src=&quot;https://www.pandarg.com/sites/default/files/styles/mobile-header/public/default_images/prg-default.jpg?itok=Upruk9yb&quot; width=&quot;640&quot; height=&quot;223&quot; alt=&quot;&quot; />"
                                            data-adaptive-image-880-img="<img class=&quot;adaptive-image image-style-press-video&quot; data-adaptive-image-breakpoint=&quot;880&quot; src=&quot;https://www.pandarg.com/sites/default/files/styles/press_video/public/default_images/prg-default.jpg?itok=vHugYGl5&quot; width=&quot;214&quot; height=&quot;123&quot; alt=&quot;&quot; />"
                                            data-adaptive-image-max-img="<img class=&quot;adaptive-image image-style-none&quot; data-adaptive-image-breakpoint=&quot;max&quot; src=&quot;{{asset('images/prg-default.jpg')}}&quot; alt=&quot;&quot; />"><img
                                                class="image-style-none"
                                                src="{{asset('images/prg-default.jpg')}}"
                                                alt="" /></noscript><img class="adaptive-image image-style-none"
                                            data-adaptive-image-breakpoint="max"
                                            src="{{asset('images/prg-default.jpg')}}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container title-wrap">
            <div class="row">
                <div class="news-title">
                    <h1 id="page-title"> Contact Us </h1>
                </div>
            </div>
        </div>

        <div class="page-news-menu news-section subnav">
            <div class="container">
                <div class="row"> </div>
            </div>
        </div>

        <div class="space">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="content" class="region">
                            <div id="block-system-main" class="block block-system no-title">

                                <article id="node-68" class="node node-webform node-promoted article clearfix"
                                    role="article">



                                    <div class="node-content">
                                        <div
                                            class="field field-name-body field-type-text-with-summary field-label-hidden view-mode-full">
                                            <div class="field-items">
                                                <div class="field-item even">
                                                    <p><span style="font-size:20px;">
                                                        We'd love to hear from you! If your feedback or questions are about a Tian Tian Hainanese Chicken Rice location, please visit this Tian Tian Hainanese Chicken Rice Contact Us Form.
                                                    </span>
                                                    </p>
                                                    <p><span style="font-size: 20px;">For Tian Tian Hainanese Chicken Rice, Inc. feedback or questions, please use the form below.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form
                                            class="webform-client-form webform-client-form-68 compact-form hideSubmitButton-processed"
                                            action="" method="post" id="webform-client-form-68"
                                            onsubmit="return false;" accept-charset="UTF-8">
                                            <div>
                                                <div
                                                    class="form-item webform-component webform-component-textarea webform-component--feedback-comments compact-form-wrapper">
                                                    <label for="edit-submitted-feedback-comments"
                                                        class="compact-form-label">Feedback/Comments <span
                                                            class="form-required"
                                                            title="This field is required.">*</span></label>
                                                    <div
                                                        class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                                                        <textarea required="required" id="edit-submitted-feedback-comments" name="submitted[feedback_comments]" cols="60"
                                                            rows="5" class="form-textarea required compact-form-field"></textarea>
                                                        <div class="grippie"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-radios webform-component--do-you-require-a-response">
                                                    <label for="edit-submitted-do-you-require-a-response">Do You Require a
                                                        Response </label>
                                                    <div id="edit-submitted-do-you-require-a-response" class="form-radios">
                                                        <div
                                                            class="form-item form-type-radio form-item-submitted-do-you-require-a-response">
                                                            <input type="radio"
                                                                id="edit-submitted-do-you-require-a-response-1"
                                                                name="submitted[do_you_require_a_response]" value="yes"
                                                                class="form-radio"> <label class="option"
                                                                for="edit-submitted-do-you-require-a-response-1">Yes
                                                            </label>

                                                        </div>
                                                        <div
                                                            class="form-item form-type-radio form-item-submitted-do-you-require-a-response">
                                                            <input type="radio"
                                                                id="edit-submitted-do-you-require-a-response-2"
                                                                name="submitted[do_you_require_a_response]" value="no"
                                                                checked="checked" class="form-radio"> <label class="option"
                                                                for="edit-submitted-do-you-require-a-response-2">No </label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-email webform-component--email-address compact-form-wrapper">
                                                    <label for="edit-submitted-email-address"
                                                        class="compact-form-label">Email Address <span class="form-required"
                                                            title="This field is required.">*</span></label>
                                                    <input required="required"
                                                        class="email form-text form-email required compact-form-field"
                                                        type="email" id="edit-submitted-email-address"
                                                        name="submitted[email_address]" size="60">
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-textfield webform-component--first-name compact-form-wrapper">
                                                    <label for="edit-submitted-first-name"
                                                        class="compact-form-label">First
                                                        Name <span class="form-required"
                                                            title="This field is required.">*</span></label>
                                                    <input required="required" type="text"
                                                        id="edit-submitted-first-name" name="submitted[first_name]"
                                                        value="" size="60" maxlength="128"
                                                        class="form-text required compact-form-field">
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-textfield webform-component--last-name compact-form-wrapper">
                                                    <label for="edit-submitted-last-name" class="compact-form-label">Last
                                                        Name </label>
                                                    <input type="text" id="edit-submitted-last-name"
                                                        name="submitted[last_name]" value="" size="60"
                                                        maxlength="128" class="form-text compact-form-field">
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-textfield webform-component--address compact-form-wrapper">
                                                    <label for="edit-submitted-address" class="compact-form-label">Address
                                                    </label>
                                                    <input type="text" id="edit-submitted-address"
                                                        name="submitted[address]" value="" size="60"
                                                        maxlength="128" class="form-text compact-form-field">
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-textfield webform-component--city compact-form-wrapper">
                                                    <label for="edit-submitted-city" class="compact-form-label">City
                                                    </label>
                                                    <input type="text" id="edit-submitted-city" name="submitted[city]"
                                                        value="" size="60" maxlength="128"
                                                        class="form-text compact-form-field">
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-select webform-component--state">
                                                    <label for="edit-submitted-state">State </label>
                                                    <select id="edit-submitted-state" name="submitted[state]"
                                                        class="form-select">
                                                        <option value="" selected="selected">- None -</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="DC">District of Columbia</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="MP">Northern Marianas Islands</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VI">Virgin Islands</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-textfield webform-component--zip compact-form-wrapper">
                                                    <label for="edit-submitted-zip" class="compact-form-label">Zip
                                                    </label>
                                                    <input type="text" id="edit-submitted-zip" name="submitted[zip]"
                                                        value="" size="60" maxlength="128"
                                                        class="form-text compact-form-field">
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-textfield webform-component--phone-number compact-form-wrapper">
                                                    <label for="edit-submitted-phone-number"
                                                        class="compact-form-label">Phone Number </label>
                                                    <input type="text" id="edit-submitted-phone-number"
                                                        name="submitted[phone_number]" value="" size="60"
                                                        maxlength="128" class="form-text compact-form-field">
                                                    <div class="description">(If you prefer to be contacted by phone. ie
                                                        6267999898)</div>
                                                </div>
                                                <input type="hidden" name="details[sid]">
                                                <input type="hidden" name="details[page_num]" value="1">
                                                <input type="hidden" name="details[page_count]" value="1">
                                                <input type="hidden" name="details[finished]" value="0">
                                                <input type="hidden" name="form_build_id"
                                                    value="form-nJN9A-Yq3pxJMB9rT0PnX2Lk2GvPH7SE5nvF0-MkDrM">
                                                <input type="hidden" name="form_id" value="webform_client_form_68">
                                                <div class="form-actions">
                                                    <div id="google_recaptcha_webform_client_form_68">
                                                        <div style="width: 304px; height: 78px;">
                                                            <div><iframe title="reCAPTCHA" width="304" height="78"
                                                                    role="presentation" name="a-s9w6elugnosz"
                                                                    frameborder="0" scrolling="no"
                                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ld1vKQUAAAAAPQnOi7a-w1i3O8kZPcXzs1Cy7OP&amp;co=aHR0cHM6Ly93d3cucGFuZGFyZy5jb206NDQz&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;theme=light&amp;size=normal&amp;cb=59lmeli8w78g"></iframe>
                                                            </div>
                                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div><iframe style="display: none;"></iframe>
                                                    </div><input class="webform-submit button-primary form-submit"
                                                        type="button" name="op" value="Submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>



                                </article>

                            </div>
                        </div>
                        <!-- !Feed Icons -->
                        <!-- !Content Aside Region-->

                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        $(document).ready(function() {
            $("textarea, input[type='text'], input[type='email']").on("click", function() {
                $(this).closest('.form-item').find('label').hide();
            })
        });
    </script>
@endsection
