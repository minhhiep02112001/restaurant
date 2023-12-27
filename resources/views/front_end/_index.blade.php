@php
    $config_seo = json_decode(getValueSetting('config_seo'));
    $config_website = json_decode(getValueSetting('config_website'));
    $ver = '1.1.2';

@endphp

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('front_end.layout.config_seo_header')

    <link rel="stylesheet" href="{{ asset('assets/plugin/font-awesome/css/font-awesome.min.css') }}?v=1.2.2"
        media="all" type="text/css">
    <link rel="stylesheet" href="{{ asset('wp-content/themes/jquery_ui.css' . "?v=$ver") }}" />
    @yield('css')


    <link rel="stylesheet" id="fp_google_fonts-css"
        href="http://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600%2C700%2C400%2C300&amp;ver=6.1.4"
        type="text/css" media="screen" />

       
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400;1,700">
    <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule"
        src="../assets.squarespace.com/%40sqs/polyfiller/1.6/legacy.js"></script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer"
        src="../assets.squarespace.com/%40sqs/polyfiller/1.6/modern.js"></script>
    <script type="text/javascript">
        SQUARESPACE_ROLLUPS = {};
    </script>
    <script>
        (function(rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = [
                "//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-2963c05c4a543d9dceff-min.en-US.js"
            ];
        })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');
    </script>
    <script crossorigin="anonymous"
        src="../assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-2963c05c4a543d9dceff-min.en-US.js"
        defer></script>
    <script>
        (function(rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = [
                "//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-f36b6dc9867ad0b8d0a8-min.en-US.js"
            ];
        })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');
    </script>
    <script crossorigin="anonymous"
        src="../assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-f36b6dc9867ad0b8d0a8-min.en-US.js"
        defer></script>
    <script>
        (function(rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = [
                "//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-a682f7ad337741eb05d6-min.en-US.js"
            ];
        })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');
    </script>
    <script crossorigin="anonymous"
        src="../assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-a682f7ad337741eb05d6-min.en-US.js"
        defer></script>
    <script>
        (function(rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = [
                "//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-f9df4447a2af25df5875-min.en-US.js"
            ];
        })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');
    </script>
    <script crossorigin="anonymous"
        src="../assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-f9df4447a2af25df5875-min.en-US.js"
        defer></script>
    <script>
        (function(rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = [
                "//assets.squarespace.com/universal/scripts-compressed/common-vendors-b57c326404c88a7dc9cf-min.en-US.js"
            ];
        })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');
    </script>
    <script crossorigin="anonymous"
        src="../assets.squarespace.com/universal/scripts-compressed/common-vendors-b57c326404c88a7dc9cf-min.en-US.js" defer>
    </script>
    <script>
        (function(rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = [
                "//assets.squarespace.com/universal/scripts-compressed/common-c9110343498015b052f5-min.en-US.js"
            ];
        })(SQUARESPACE_ROLLUPS, 'squarespace-common');
    </script>
    <script crossorigin="anonymous"
        src="../assets.squarespace.com/universal/scripts-compressed/common-c9110343498015b052f5-min.en-US.js" defer>
    </script>
    <script>
        (function(rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = [
                "//assets.squarespace.com/universal/scripts-compressed/performance-b37c73015d73b8ed459e-min.en-US.js"
            ];
        })(SQUARESPACE_ROLLUPS, 'squarespace-performance');
    </script>
    <script crossorigin="anonymous"
        src="../assets.squarespace.com/universal/scripts-compressed/performance-b37c73015d73b8ed459e-min.en-US.js" defer>
    </script>
    <script data-name="static-context">
        Static = window.Static || {};
        Static.SQUARESPACE_CONTEXT = {
            "facebookAppId": "314192535267336",
            "facebookApiVersion": "v6.0",
            "rollups": {
                "squarespace-announcement-bar": {
                    "js": "//assets.squarespace.com/universal/scripts-compressed/announcement-bar-4f8569e19299e13caeb0-min.en-US.js"
                },
                "squarespace-audio-player": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/audio-player-68f0d70f87aaddb33c87-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/audio-player-bbf1aa952e078ee03756-min.en-US.js"
                },
                "squarespace-blog-collection-list": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/blog-collection-list-1e4496937ccd55da84b7-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-048663ba2cf6a7a7e2ab-min.en-US.js"
                },
                "squarespace-calendar-block-renderer": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-17dca3f66c4211bf16d1-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-fa2e6aedd62e6a8b414b-min.en-US.js"
                },
                "squarespace-chartjs-helpers": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-d3ebe653c1c873022724-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-b563233accd8cb73f20e-min.en-US.js"
                },
                "squarespace-comments": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/comments-6800f146d3c87a3960c8-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/comments-2efc61a824c254f85298-min.en-US.js"
                },
                "squarespace-custom-css-popup": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/custom-css-popup-45ae66e97b26da4fda4c-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-9383160d2bf6a1438076-min.en-US.js"
                },
                "squarespace-dialog": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/dialog-7be2c8cd6843b640aee5-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/dialog-bfdd258c970b42fe7c15-min.en-US.js"
                },
                "squarespace-events-collection": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/events-collection-17dca3f66c4211bf16d1-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/events-collection-a649370265fba922e862-min.en-US.js"
                },
                "squarespace-form-rendering-utils": {
                    "js": "//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-a9b2fb0748b06222632b-min.en-US.js"
                },
                "squarespace-forms": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/forms-e6610e528d6f92fd5031-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/forms-5a24b58285aec0ea71c6-min.en-US.js"
                },
                "squarespace-gallery-collection-list": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-1e4496937ccd55da84b7-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-0d09e1a7a1ba0fc881ec-min.en-US.js"
                },
                "squarespace-image-zoom": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/image-zoom-1e4496937ccd55da84b7-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/image-zoom-5bdea60b820a46f64491-min.en-US.js"
                },
                "squarespace-pinterest": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/pinterest-1e4496937ccd55da84b7-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/pinterest-3c146d573623ad66d063-min.en-US.js"
                },
                "squarespace-popup-overlay": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/popup-overlay-667fa2c6bd659fe9a639-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/popup-overlay-0727c83e5ef61c9cdab3-min.en-US.js"
                },
                "squarespace-product-quick-view": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/product-quick-view-f2c5750b07447cd0e8c5-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/product-quick-view-39ca99af040caa81f9b3-min.en-US.js"
                },
                "squarespace-products-collection-item-v2": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-1e4496937ccd55da84b7-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-5e2b4cf8f4bdec870aea-min.en-US.js"
                },
                "squarespace-products-collection-list-v2": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-1e4496937ccd55da84b7-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-3d5df27a47a9216f9489-min.en-US.js"
                },
                "squarespace-search-page": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/search-page-622dbcc4356d75bd674a-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/search-page-f8664d38996cf88a9452-min.en-US.js"
                },
                "squarespace-search-preview": {
                    "js": "//assets.squarespace.com/universal/scripts-compressed/search-preview-1e9f95528608b73e8a51-min.en-US.js"
                },
                "squarespace-simple-liking": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/simple-liking-3a1fa618b156b16f9a32-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/simple-liking-360f950698a5d7a4ccf0-min.en-US.js"
                },
                "squarespace-social-buttons": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/social-buttons-5ccc4fc16300710a0a68-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/social-buttons-b0bea80d6e3fe5b5e9e7-min.en-US.js"
                },
                "squarespace-tourdates": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/tourdates-1e4496937ccd55da84b7-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/tourdates-965069177a8abeca3218-min.en-US.js"
                },
                "squarespace-website-overlays-manager": {
                    "css": "//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-03eed1717232cc37078d-min.en-US.css",
                    "js": "//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-d581e1121362ca700802-min.en-US.js"
                }
            },
            "pageType": 1,
            "website": {
                "id": "5c4766f7ee175955203ef26a",
                "identifier": "algae-plums-fwsc",
                "websiteType": 1,
                "contentModifiedOn": 1694202887389,
                "cloneable": false,
                "hasBeenCloneable": false,
                "siteStatus": {},
                "language": "en-US",
                "timeZone": "America/Vancouver",
                "machineTimeZoneOffset": -28800000,
                "timeZoneOffset": -28800000,
                "timeZoneAbbr": "PST",
                "siteTitle": "Kook Korean BBQ",
                "fullSiteTitle": "Kook Korean BBQ",
                "siteDescription": "",
                "location": {
                    "mapLat": 49.26916370000001,
                    "mapLng": -123.0463411,
                    "addressTitle": "Kook BBQ",
                    "addressLine1": "2800 East 1st Avenue",
                    "addressLine2": "Vancouver, BC, V5M 4P3",
                    "addressCountry": "Canada"
                },
                "logoImageId": "5eb0877b53413f5fb4d0f397",
                "socialLogoImageId": "5c4fa6f57ba7fc601bbda4bc",
                "shareButtonOptions": {
                    "1": true,
                    "2": true,
                    "3": true
                },
                "logoImageUrl": "//images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1588627323969-8A99TT8UPKP5I543JTY3/kook-logo-gold-01.png",
                "socialLogoImageUrl": "//images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1548723996672-Z1A2Q0PGHK48TMB0IDVV/kook-logo-black_%25EB%258C%2580%25EC%25A7%2580%2B1.jpg",
                "authenticUrl": "https://www.kookbbq.ca",
                "internalUrl": "https://algae-plums-fwsc.squarespace.com",
                "baseUrl": "https://www.kookbbq.ca",
                "primaryDomain": "www.kookbbq.ca",
                "sslSetting": 3,
                "isHstsEnabled": false,
                "socialAccounts": [{
                    "serviceId": 20,
                    "userId": "info@kookbbq.ca",
                    "screenname": "info@kookbbq.ca",
                    "addedOn": 1548462413631,
                    "profileUrl": "mailto:info@kookbbq.ca",
                    "iconEnabled": true,
                    "serviceName": "email"
                }, {
                    "serviceId": 2,
                    "userId": "10155665903826529",
                    "screenname": "Kook Korean BBQ",
                    "addedOn": 1548712517834,
                    "profileUrl": "https://www.facebook.com/kookbbq/",
                    "iconUrl": "http://graph.facebook.com/10155665903826529/picture?type=square",
                    "metaData": {
                        "service": "facebook"
                    },
                    "iconEnabled": true,
                    "serviceName": "facebook"
                }, {
                    "serviceId": 10,
                    "userId": "6726991665",
                    "userName": "kookbbq",
                    "screenname": "Kook Korean BBQ",
                    "addedOn": 1548712599754,
                    "profileUrl": "http://instagram.com/kookbbq",
                    "iconUrl": "https://scontent.cdninstagram.com/vp/47d107443a380efbbbf6dc1eb550430c/5CDF675A/t51.2885-19/s150x150/44853198_1827090897419742_6591310219807031296_n.jpg?_nc_ht=scontent.cdninstagram.com",
                    "collectionId": "5c4f7a97f407b45f489c8c68",
                    "iconEnabled": true,
                    "serviceName": "instagram"
                }],
                "typekitId": "",
                "statsMigrated": false,
                "imageMetadataProcessingEnabled": false,
                "screenshotId": "d2d53876a67efa99c81205039af31c745cb49e94b77c0f81d6d0bb8b581cc679",
                "captchaSettings": {
                    "enabledForDonations": false
                },
                "showOwnerLogin": false
            },
            "websiteSettings": {
                "id": "5c4766f7ee175955203ef26d",
                "websiteId": "5c4766f7ee175955203ef26a",
                "subjects": [],
                "country": "CA",
                "state": "BC",
                "simpleLikingEnabled": true,
                "mobileInfoBarSettings": {
                    "isContactEmailEnabled": false,
                    "isContactPhoneNumberEnabled": false,
                    "isLocationEnabled": false,
                    "isBusinessHoursEnabled": false
                },
                "announcementBarSettings": {
                    "style": 1,
                    "text": "<p class=\"\" style=\"white-space:pre-wrap;\"> We Now Deliver with Uber Eats, Skip The Dishes and Doordash - Order Now</p>",
                    "clickthroughUrl": {
                        "url": "https://www.doordash.com/store/596910/?utm_campaign=596910&utm_medium=website&utm_source=partner-link",
                        "newWindow": true
                    }
                },
                "popupOverlaySettings": {
                    "style": 1,
                    "showOnScroll": false,
                    "scrollPercentage": 25,
                    "showOnTimer": true,
                    "timerDelay": 0,
                    "showUntilSignup": false,
                    "displayFrequency": 1,
                    "enableMobile": true,
                    "enabledPages": ["5c4a47c71ae6cf770c90fd6e", "5c4b8a412b6a28b6ba050537", "5c4b887ff950b77130c6c2ff",
                        "5c4a4541c2241b34fec055a9"
                    ],
                    "showOnAllPages": true,
                    "version": 2
                },
                "commentLikesAllowed": true,
                "commentAnonAllowed": true,
                "commentThreaded": true,
                "commentApprovalRequired": false,
                "commentAvatarsOn": true,
                "commentSortType": 2,
                "commentFlagThreshold": 0,
                "commentFlagsAllowed": true,
                "commentEnableByDefault": true,
                "commentDisableAfterDaysDefault": 0,
                "disqusShortname": "",
                "commentsEnabled": false,
                "contactPhoneNumber": "",
                "businessHours": {
                    "monday": {
                        "text": "11:00 - 15:00,  17:00 - 22:00",
                        "ranges": [{
                            "from": 660,
                            "to": 900
                        }, {
                            "from": 1020,
                            "to": 1320
                        }]
                    },
                    "tuesday": {
                        "text": "11:00 - 15:00,  17:00 - 22:00",
                        "ranges": [{
                            "from": 660,
                            "to": 900
                        }, {
                            "from": 1020,
                            "to": 1320
                        }]
                    },
                    "wednesday": {
                        "text": "11:00 - 15:00,  17:00 - 22:00",
                        "ranges": [{
                            "from": 660,
                            "to": 900
                        }, {
                            "from": 1020,
                            "to": 1320
                        }]
                    },
                    "thursday": {
                        "text": "11:00 - 15:00,  17:00 - 22:00",
                        "ranges": [{
                            "from": 660,
                            "to": 900
                        }, {
                            "from": 1020,
                            "to": 1320
                        }]
                    },
                    "friday": {
                        "text": "11:00 - 15:00,  17:00 - 22:00",
                        "ranges": [{
                            "from": 660,
                            "to": 900
                        }, {
                            "from": 1020,
                            "to": 1320
                        }]
                    },
                    "saturday": {
                        "text": "11:00 - 15:00,  17:00 - 22:00",
                        "ranges": [{
                            "from": 660,
                            "to": 900
                        }, {
                            "from": 1020,
                            "to": 1320
                        }]
                    },
                    "sunday": {
                        "text": "11:00 - 15:00,  17:00 - 22:00",
                        "ranges": [{
                            "from": 660,
                            "to": 900
                        }, {
                            "from": 1020,
                            "to": 1320
                        }]
                    }
                },
                "storeSettings": {
                    "returnPolicy": null,
                    "termsOfService": null,
                    "privacyPolicy": null,
                    "expressCheckout": false,
                    "continueShoppingLinkUrl": "/",
                    "useLightCart": false,
                    "showNoteField": false,
                    "shippingCountryDefaultValue": "CA",
                    "billToShippingDefaultValue": false,
                    "showShippingPhoneNumber": true,
                    "isShippingPhoneRequired": false,
                    "showBillingPhoneNumber": true,
                    "isBillingPhoneRequired": false,
                    "currenciesSupported": ["CHF", "HKD", "MXN", "EUR", "DKK", "USD", "CAD", "MYR", "NOK", "THB", "AUD",
                        "SGD", "ILS", "PLN", "GBP", "CZK", "SEK", "NZD", "PHP", "RUB"
                    ],
                    "defaultCurrency": "USD",
                    "selectedCurrency": "CAD",
                    "measurementStandard": 1,
                    "showCustomCheckoutForm": false,
                    "checkoutPageMarketingOptInEnabled": false,
                    "enableMailingListOptInByDefault": false,
                    "sameAsRetailLocation": false,
                    "merchandisingSettings": {
                        "scarcityEnabledOnProductItems": false,
                        "scarcityEnabledOnProductBlocks": false,
                        "scarcityMessageType": "DEFAULT_SCARCITY_MESSAGE",
                        "scarcityThreshold": 10,
                        "multipleQuantityAllowedForServices": true,
                        "restockNotificationsEnabled": false,
                        "restockNotificationsSuccessText": "",
                        "restockNotificationsMailingListSignUpEnabled": false,
                        "relatedProductsEnabled": false,
                        "relatedProductsOrdering": "random",
                        "soldOutVariantsDropdownDisabled": false,
                        "productComposerOptedIn": false,
                        "productComposerABTestOptedOut": false,
                        "productReviewsEnabled": false,
                        "displayImportedProductReviewsEnabled": false,
                        "hasOptedToCollectNativeReviews": false
                    },
                    "isLive": false,
                    "multipleQuantityAllowedForServices": true
                },
                "useEscapeKeyToLogin": true,
                "ssBadgeType": 1,
                "ssBadgePosition": 4,
                "ssBadgeVisibility": 1,
                "ssBadgeDevices": 1,
                "pinterestOverlayOptions": {
                    "mode": "disabled"
                },
                "ampEnabled": false,
                "userAccountsSettings": {
                    "loginAllowed": false,
                    "signupAllowed": false
                }
            },
            "cookieSettings": {
                "isCookieBannerEnabled": false,
                "isRestrictiveCookiePolicyEnabled": false,
                "isRestrictiveCookiePolicyAbsolute": false,
                "cookieBannerText": "",
                "cookieBannerTheme": "",
                "cookieBannerVariant": "",
                "cookieBannerPosition": "",
                "cookieBannerCtaVariant": "",
                "cookieBannerCtaText": "",
                "cookieBannerAcceptType": "OPT_IN",
                "cookieBannerOptOutCtaText": ""
            },
            "websiteCloneable": false,
            "collection": {
                "title": "Home",
                "id": "5c4a47c71ae6cf770c90fd6e",
                "fullUrl": "/",
                "type": 1,
                "permissionType": 1
            },
            "subscribed": false,
            "appDomain": "squarespace.com",
            "templateTweakable": true,
            "tweakJSON": {
                "aspect-ratio": "Auto",
                "gallery-arrow-style": "No Background",
                "gallery-aspect-ratio": "3:2 Standard",
                "gallery-auto-crop": "true",
                "gallery-autoplay": "false",
                "gallery-design": "Slideshow",
                "gallery-info-overlay": "Show on Hover",
                "gallery-loop": "false",
                "gallery-navigation": "Bullets",
                "gallery-show-arrows": "true",
                "gallery-transitions": "Fade",
                "galleryArrowBackground": "rgba(34,34,34,1)",
                "galleryArrowColor": "rgba(255,255,255,1)",
                "galleryAutoplaySpeed": "3",
                "galleryCircleColor": "rgba(255,255,255,1)",
                "galleryInfoBackground": "rgba(0, 0, 0, .7)",
                "galleryThumbnailSize": "100px",
                "gridSize": "350px",
                "gridSpacing": "20px",
                "tweak-blog-list-columns": "2",
                "tweak-blog-list-item-image-aspect-ratio-grid": "3:2 Standard",
                "tweak-blog-list-item-image-aspect-ratio-stacked": "3:2 Standard",
                "tweak-blog-list-item-image-show": "true",
                "tweak-blog-list-spacing": "60px",
                "tweak-blog-list-style": "Stacked",
                "tweak-footer-layout": "Stacked",
                "tweak-header-bottom-overlay-on-index-gallery": "false",
                "tweak-index-gallery-apply-bottom-spacing": "true",
                "tweak-index-gallery-autoplay-duration": "2",
                "tweak-index-gallery-autoplay-enable": "true",
                "tweak-index-gallery-fixed-height": "true",
                "tweak-index-gallery-height": "100vh",
                "tweak-index-gallery-indicators": "Lines",
                "tweak-index-gallery-layout": "Packed",
                "tweak-index-gallery-transition": "Fade",
                "tweak-index-gallery-transition-duration": "500",
                "tweak-index-nav-position": "Right",
                "tweak-index-page-apply-bottom-spacing": "false",
                "tweak-index-page-fullscreen": "Pages with Backgrounds Only",
                "tweak-index-page-min-height": "100vh",
                "tweak-mobile-breakpoint": "640px",
                "tweak-overlay-parallax-enabled": "true",
                "tweak-overlay-parallax-new-math": "true",
                "tweak-product-item-image-zoom-factor": "2.5",
                "tweak-product-list-item-hover-behavior": "Show Alternate Image",
                "tweak-product-list-items-per-row": "2",
                "tweak-related-products-items-per-row": "3",
                "tweak-related-products-title-spacing": "50px",
                "tweak-site-ajax-loading-enable": "true",
                "tweak-site-border-show": "false",
                "tweak-site-border-width": "5px"
            },
            "templateId": "55f0aac0e4b0f0a5b7e0b22e",
            "templateVersion": "7",
            "pageFeatures": [1, 2, 4],
            "gmRenderKey": "QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4",
            "templateScriptsRootUrl": "https://static1.squarespace.com/static/ta/55f0a9b0e4b0f3eb70352f6d/352/scripts/",
            "betaFeatureFlags": ["campaigns_discount_section_in_blasts", "visitor_react_forms",
                "campaigns_new_image_layout_picker", "enable_css_variable_tweaks", "site_user_email_change",
                "crm_remove_subscriber", "crm_show_profile_forms", "fluid_engine_clean_up_grid_contextual_change",
                "pdp_product_add_ons_visitor_site", "customer_account_creation_recaptcha", "improved_paywalls",
                "commerce_checkout_website_updates_enabled", "commerce_clearpay", "is_feature_gate_refresh_enabled",
                "scripts_defer", "customize_collection_overview_paywalling", "background_art_onboarding",
                "viewer-role-contributor-invites", "commerce_restock_notifications",
                "member_areas_schedule_interview", "commerce_order_status_access", "campaigns_thumbnail_layout",
                "commsplat_forms_visitor_profile", "unify_edit_mode_p2",
                "order_status_page_checkout_landing_enabled", "toggle_preview_new_shortcut",
                "commerce_etsy_shipping_import", "campaigns_global_uc_ab", "member_areas_spanish_interviews",
                "customer_accounts_email_verification", "website_fonts", "website_component_enabled",
                "show_add_to_cart_in_plp", "customize_item_paywalling", "accounting_orders_sync",
                "digital_products_monetization_ga_enabled", "marketing_landing_page",
                "nested_categories_migration_enabled", "member_areas_provisioning_service",
                "crm_default_newsletter_block_to_campaigns", "commerce_etsy_product_import",
                "commerce_site_visitor_metrics", "campaigns_import_discounts", "send_local_pickup_ready_email",
                "campaigns_discount_section_in_automations", "fluid_engine", "image_component"
            ],
            "videoAssetsFeatureFlags": ["mux-data-video-collection", "mux-data-video-block",
                "mux-data-course-collection"
            ],
            "impersonatedSession": false,
            "demoCollections": [{
                "collectionId": "58b5ed10bf629a356f09728a",
                "deleted": false
            }, {
                "collectionId": "58b5ed20e6f2e167a70d60f4",
                "deleted": false
            }],
            "tzData": {
                "zones": [
                    [-480, "Canada", "P%sT", null]
                ],
                "rules": {
                    "Canada": [
                        [1974, 2006, null, "Oct", "lastSun", "2:00", "0", "S"],
                        [1987, 2006, null, "Apr", "Sun>=1", "2:00", "1:00", "D"],
                        [2007, "max", null, "Mar", "Sun>=8", "2:00", "1:00", "D"],
                        [2007, "max", null, "Nov", "Sun>=1", "2:00", "0", "S"]
                    ]
                }
            },
            "showAnnouncementBar": false,
            "recaptchaEnterpriseContext": {
                "recaptchaEnterpriseSiteKey": "6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"
            },
            "i18nContext": {
                "timeZoneData": {
                    "id": "America/Vancouver",
                    "name": "Pacific Time"
                }
            }
        };
    </script>
    <script type="module">
        SquarespaceFonts.loadViaContext();
        Squarespace.load(window);
    </script>
    <script data-sqs-type="imageloader-bootstrapper" type="module">if(window.ImageLoader) window.ImageLoader.bootstrap({}, document);</script>
    <script type="module">
        Squarespace.afterBodyLoad(Y);
    </script>
    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="homea409?format=rss" />
    <script type="application/ld+json">{"url":"https://www.kookbbq.ca","name":"Kook Korean BBQ","description":"","image":"//images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1588627323969-8A99TT8UPKP5I543JTY3/kook-logo-gold-01.png","@context":"http://schema.org","@type":"WebSite"}</script>
    <script type="application/ld+json">{"legalName":"Kook BBQ","address":"2800 East 1st Avenue\nVancouver, BC, V5M 4P3\nCanada","email":"info@koookbbq.ca","telephone":"","sameAs":["mailto:info@kookbbq.ca","https://www.facebook.com/kookbbq/","http://instagram.com/kookbbq"],"@context":"http://schema.org","@type":"Organization"}</script>
    <script type="application/ld+json">{"address":"2800 East 1st Avenue\nVancouver, BC, V5M 4P3\nCanada","image":"https://static1.squarespace.com/static/5c4766f7ee175955203ef26a/t/5eb0877b53413f5fb4d0f397/1694202887389/","name":"Kook BBQ","openingHours":"Mo 11:00-15:00, Mo 17:00-22:00, Tu 11:00-15:00, Tu 17:00-22:00, We 11:00-15:00, We 17:00-22:00, Th 11:00-15:00, Th 17:00-22:00, Fr 11:00-15:00, Fr 17:00-22:00, Sa 11:00-15:00, Sa 17:00-22:00, Su 11:00-15:00, Su 17:00-22:00","@context":"http://schema.org","@type":"LocalBusiness"}</script>
    <link rel="stylesheet" type="text/css"
        href="../static1.squarespace.com/static/sitecss/5c4766f7ee175955203ef26a/96/55f0aac0e4b0f0a5b7e0b22e/5c4766f7ee175955203ef27f/352/site.css" />
    <script>
        Static.COOKIE_BANNER_CAPABLE = true;
    </script>
    <!-- End of Squarespace Headers -->
</head>

<body id="collection-5c4a47c71ae6cf770c90fd6e"
    class="tweak-social-icons-style-solid tweak-social-icons-shape-square tweak-site-width-option-full-background tweak-icon-weight-hairline  tweak-site-ajax-loading-enable tweak-site-ajax-loading-bar-show ancillary-header-top-left-layout-horizontal ancillary-header-top-center-layout-horizontal ancillary-header-top-right-layout-horizontal ancillary-header-bottom-left-layout-horizontal ancillary-header-bottom-center-layout-horizontal ancillary-header-bottom-right-layout-horizontal ancillary-header-branding-position-bottom-left ancillary-header-tagline-position-top-left ancillary-header-primary-nav-position-bottom-right ancillary-header-secondary-nav-position-bottom-right ancillary-header-social-position-hide ancillary-header-search-position-hide ancillary-header-cart-position-hide ancillary-header-account-position-hide tweak-header-primary-nav-hover-style-active tweak-header-primary-nav-button-style-solid tweak-header-primary-nav-button-shape-square tweak-header-secondary-nav-inherit-styles tweak-header-secondary-nav-hover-style-spotlight tweak-header-secondary-nav-button-style-solid tweak-header-secondary-nav-button-shape-square tweak-header-search-style-underlined tweak-header-search-placeholder-show tweak-header-cart-style-cart tweak-header-account-style-text tweak-overlay-parallax-enabled tweak-overlay-parallax-new-math tweak-index-nav-style-none tweak-index-nav-position-right tweak-index-nav-text-show tweak-index-page-fullscreen-pages-with-backgrounds-only  tweak-index-page-scroll-indicator-icon-only tweak-index-page-scroll-indicator-icon-arrow tweak-index-page-scroll-indicator-icon-weight-light  tweak-index-gallery-layout-packed tweak-index-gallery-spacing-sides-show tweak-index-gallery-spacing-top-bottom-show tweak-index-gallery-fixed-height tweak-index-gallery-apply-bottom-spacing tweak-index-gallery-hover-style-plain tweak-index-gallery-controls-small-arrows tweak-index-gallery-controls-icon-weight-hairline tweak-index-gallery-indicators-lines tweak-index-gallery-autoplay-enable tweak-index-gallery-transition-fade tweak-index-gallery-content-position-bottom-left tweak-index-gallery-content-text-alignment-left tweak-footer-show tweak-footer-layout-stacked tweak-footer-layout-columns-auto tweak-footer-stacked-alignment-left    ancillary-mobile-bar-branding-position-top-left ancillary-mobile-bar-menu-icon-position-top-right tweak-mobile-bar-menu-icon-hamburger ancillary-mobile-bar-search-icon-position-hide ancillary-mobile-bar-cart-position-hide tweak-mobile-bar-cart-style-text ancillary-mobile-bar-account-position-hide tweak-mobile-bar-account-style-text tweak-mobile-overlay-slide-origin-left tweak-mobile-overlay-close-show  tweak-mobile-overlay-menu-primary-button-style-solid tweak-mobile-overlay-menu-primary-button-shape-square   tweak-mobile-overlay-menu-secondary-button-style-solid tweak-mobile-overlay-menu-secondary-button-shape-square tweak-quote-block-alignment-center  tweak-blog-meta-primary-date tweak-blog-meta-secondary-date tweak-blog-list-style-stacked tweak-blog-list-separator-show tweak-blog-list-alignment-center tweak-blog-list-item-image-show tweak-blog-list-item-image-aspect-ratio-grid-32-standard tweak-blog-list-item-image-aspect-ratio-stacked-32-standard tweak-blog-list-item-title-show tweak-blog-list-item-excerpt-show tweak-blog-list-item-body-show tweak-blog-list-item-readmore-hide tweak-blog-list-item-meta-position-above-title tweak-blog-list-pagination-link-label-show tweak-blog-list-pagination-link-icon-show tweak-blog-list-pagination-link-icon-weight-light tweak-blog-item-alignment-center tweak-blog-item-meta-position-above-title tweak-blog-item-share-position-below-content  tweak-blog-item-pagination-link-label-show tweak-blog-item-pagination-link-title-show tweak-blog-item-pagination-link-meta-category tweak-blog-item-pagination-link-icon-weight-hairline   event-thumbnails event-thumbnail-size-32-standard event-date-label  event-list-show-cats event-list-date event-list-time event-list-address     event-excerpts  event-item-back-link    gallery-design-slideshow aspect-ratio-auto lightbox-style-dark gallery-navigation-bullets gallery-info-overlay-show-on-hover gallery-aspect-ratio-32-standard gallery-arrow-style-no-background gallery-transitions-fade gallery-show-arrows gallery-auto-crop   tweak-product-list-image-aspect-ratio-11-square tweak-product-list-item-hover-behavior-show-alternate-image tweak-product-list-meta-position-overlay tweak-product-list-mobile-meta-position-under tweak-product-list-meta-alignment-under-center tweak-product-list-meta-alignment-overlay-center-center tweak-product-list-show-title tweak-product-list-show-price tweak-product-list-filter-display-hide tweak-product-list-filter-alignment-left tweak-product-item-nav-show-breadcrumb-and-pagination tweak-product-item-nav-pagination-style-previousnext tweak-product-item-nav-breadcrumb-alignment-left tweak-product-item-nav-pagination-alignment-split tweak-product-item-gallery-position-right tweak-product-item-gallery-design-stacked tweak-product-item-gallery-aspect-ratio-11-square tweak-product-item-gallery-thumbnail-alignment-left tweak-product-item-details-alignment-left tweak-product-item-details-show-title tweak-product-item-details-show-price tweak-product-item-details-show-excerpt tweak-product-item-details-excerpt-position-below-price tweak-product-item-details-show-share-buttons tweak-product-item-details-show-variants tweak-product-item-details-show-quantity tweak-product-item-details-options-style-square tweak-product-item-details-show-add-to-cart-button tweak-product-item-details-add-to-cart-button-style-solid tweak-product-item-details-add-to-cart-button-shape-pill tweak-product-item-details-add-to-cart-button-padding-small tweak-product-item-image-zoom-enabled tweak-product-item-image-zoom-behavior-click tweak-product-item-lightbox-enabled tweak-related-products-image-aspect-ratio-11-square tweak-related-products-meta-alignment-under-center tweak-product-badge-style-rectangle tweak-product-badge-position-top-right tweak-product-badge-inset-floating newsletter-style-custom  opentable-style-light small-button-style-raised small-button-shape-pill medium-button-style-raised medium-button-shape-pill large-button-style-outline large-button-shape-pill image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-center image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left  image-block-stack-text-alignment-center button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light tweak-share-buttons-style-icon-only tweak-share-buttons-icons-show native-currency-code-cad collection-type-index collection-layout-default collection-5c4a47c71ae6cf770c90fd6e homepage view-list mobile-style-available sqs-has-custom-cart has-logo-image has-social has-parallax-images has-parallax-images enable-load-effects has-primary-nav"
    data-controller="HashManager, SiteLoader, MobileClassname">

    <div class="Loader"></div>

    <div class="Mobile" data-nc-base="mobile-bar" data-controller="AncillaryLayout">
        <div class="Mobile-bar Mobile-bar--top" data-nc-group="top" data-controller="MobileOffset">

            <div data-nc-container="top-left">
                <a href="index.html" class="Mobile-bar-branding" data-nc-element="branding"
                    data-content-field="site-title">


                    <img src="../images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1588627323969-8A99TT8UPKP5I543JTY3/kook-logo-gold-0126f7.png?format=1500w"
                        alt="Kook Korean BBQ" class="Mobile-bar-branding-logo" />


                </a>
            </div>
            <div data-nc-container="top-center"></div>
            <div data-nc-container="top-right"></div>
        </div>
        <div class="Mobile-bar Mobile-bar--bottom" data-nc-group="bottom" data-controller="MobileOffset">
            <div data-nc-container="bottom-left">
                <button class="Mobile-bar-menu" data-nc-element="menu-icon" data-controller-overlay="menu"
                    data-controller="MobileOverlayToggle" aria-label="Open navigation menu">
                    <svg class="Icon Icon--hamburger" viewBox="0 0 24 18">
                        <use xlink:href="assets/ui-icons.svg#hamburger-icon--even" class="use--even"></use>
                        <use xlink:href="assets/ui-icons.svg#hamburger-icon--odd" class="use--odd"></use>
                    </svg>
                    <svg class="Icon Icon--hotdog" viewBox="0 0 24 14">
                        <use xlink:href="assets/ui-icons.svg#hotdog-icon--even" class="use--even"></use>
                        <use xlink:href="assets/ui-icons.svg#hotdog-icon--odd" class="use--odd"></use>
                    </svg>
                    <svg class="Icon Icon--plus" viewBox="0 0 20 20">
                        <use xlink:href="assets/ui-icons.svg#plus-icon--even" class="use--even"></use>
                        <use xlink:href="assets/ui-icons.svg#plus-icon--odd" class="use--odd"></use>
                    </svg>
                    <svg class="Icon Icon--dots-horizontal" viewBox="0 0 25 7">
                        <use xlink:href="assets/ui-icons.svg#dots-horizontal-icon--even" class="use--even"></use>
                        <use xlink:href="assets/ui-icons.svg#dots-horizontal-icon--odd" class="use--odd"></use>
                    </svg>
                    <svg class="Icon Icon--dots-vertical" viewBox="0 0 7 25">
                        <use xlink:href="assets/ui-icons.svg#dots-vertical-icon--even" class="use--even"></use>
                        <use xlink:href="assets/ui-icons.svg#dots-vertical-icon--odd" class="use--odd"></use>
                    </svg>
                    <svg class="Icon Icon--squares-horizontal" viewBox="0 0 25 7">
                        <use xlink:href="assets/ui-icons.svg#squares-horizontal-icon--even" class="use--even"></use>
                        <use xlink:href="assets/ui-icons.svg#squares-horizontal-icon--odd" class="use--odd"></use>
                    </svg>
                    <svg class="Icon Icon--squares-vertical" viewBox="0 0 7 25">
                        <use xlink:href="assets/ui-icons.svg#squares-vertical-icon--even" class="use--even"></use>
                        <use xlink:href="assets/ui-icons.svg#squares-vertical-icon--odd" class="use--odd"></use>
                    </svg>
                </button>
            </div>
            <div data-nc-container="bottom-center">

            </div>
            <div data-nc-container="bottom-right">

                <a href="search.html" class="Mobile-bar-search" data-nc-element="search-icon" aria-label="Search">
                    <svg class="Icon Icon--search" viewBox="0 0 20 20">
                        <use xlink:href="assets/ui-icons.svg#search-icon"></use>
                    </svg>
                </a>
            </div>
        </div>

        <div class="Mobile-overlay">
            <div class="Mobile-overlay-menu" data-controller="MobileOverlayFolders">
                <div class="Mobile-overlay-menu-main">
                    <nav class="Mobile-overlay-nav Mobile-overlay-nav--primary" data-content-field="navigation">






                        <a href="index.html" class="Mobile-overlay-nav-item">
                            Home
                        </a>









                        <a href="kookbbqmenu.html" class="Mobile-overlay-nav-item">
                            Menu
                        </a>








                        <a href="about.html" class="Mobile-overlay-nav-item">
                            About
                        </a>








                        <a href="reservations.html" class="Mobile-overlay-nav-item">
                            Reservations
                        </a>








                        <a href="contact.html" class="Mobile-overlay-nav-item">
                            Contact
                        </a>






                    </nav>
                    <nav class="Mobile-overlay-nav Mobile-overlay-nav--secondary" data-content-field="navigation">

                    </nav>
                </div>
                <div class="Mobile-overlay-folders" data-content-field="navigation">












                </div>
            </div>
            <button class="Mobile-overlay-close" data-controller="MobileOverlayToggle"
                aria-label="Close navigation menu">
                <svg class="Icon Icon--close" viewBox="0 0 16 16">
                    <use xlink:href="assets/ui-icons.svg#close-icon"></use>
                </svg>
            </button>
            <div class="Mobile-overlay-back" data-controller="MobileOverlayToggle"></div>
        </div>
    </div>


    <div class="Parallax-host-outer">
        <div class="Parallax-host" data-parallax-host>






            <div class="Parallax-item" data-parallax-item data-parallax-id="5c4768b1cd83663a096f569f"></div>











            <div class="Parallax-item" data-parallax-item data-parallax-id="5c4a4eb2f950b7808b449434"></div>





        </div>
    </div>

    <div class="Site" data-nc-base="header" data-controller="AncillaryLayout">
        <div class="sqs-announcement-bar-dropzone"></div>

        <header class="Header Header--top">
            <div class="Header-inner Header-inner--top" data-nc-group="top">
                <div data-nc-container="top-left">

                    <div class="Header-search" data-nc-element="search">
                        <form class="Header-search-form" action="https://www.kookbbq.ca/search" method="get">
                            <input class="Header-search-form-input" name="q" type="text" spellcheck="false"
                                value="" autocomplete="off" placeholder="Search" />
                            <button class="Header-search-form-submit" type="submit" data-test="template-search">
                                <svg class="Icon Icon--search--small" viewBox="0 0 15 15">
                                    <use xlink:href="assets/ui-icons.svg#search-icon--small"></use>
                                </svg>
                                <svg class="Icon Icon--search" viewBox="0 0 20 20">
                                    <use xlink:href="assets/ui-icons.svg#search-icon"></use>
                                </svg>
                            </button>
                        </form>
                    </div>

                </div>
                <div data-nc-container="top-center">


                    <div class="Header-social" data-nc-element="social">

                        <nav class="SocialLinks" data-content-field="connected-accounts">
                            <div class="SocialLinks-inner">
                                <a href="mailto:info@kookbbq.ca" target="_blank" class="SocialLinks-link email"
                                    style="">
                                    <div>
                                        <svg class="SocialLinks-link-svg" viewBox="0 0 64 64">

                                            <use class="SocialLinks-link-icon" xlink:href="#email-icon"></use>
                                            <use class="SocialLinks-link-mask" xlink:href="#email-mask"></use>
                                        </svg>
                                    </div>
                                </a><a href="https://www.facebook.com/kookbbq/" target="_blank"
                                    class="SocialLinks-link facebook" style="">
                                    <div>
                                        <svg class="SocialLinks-link-svg" viewBox="0 0 64 64">

                                            <use class="SocialLinks-link-icon" xlink:href="#facebook-icon"></use>
                                            <use class="SocialLinks-link-mask" xlink:href="#facebook-mask"></use>
                                        </svg>
                                    </div>
                                </a><a href="http://instagram.com/kookbbq" target="_blank"
                                    class="SocialLinks-link instagram" style="">
                                    <div>
                                        <svg class="SocialLinks-link-svg" viewBox="0 0 64 64">

                                            <use class="SocialLinks-link-icon" xlink:href="#instagram-icon"></use>
                                            <use class="SocialLinks-link-mask" xlink:href="#instagram-mask"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </nav>

                    </div>

                </div>
                <div data-nc-container="top-right">



                </div>
            </div>
        </header>

        <div class="Site-inner Site-inner--index" data-controller="HeaderOverlay">

            <header class="Header Header--bottom Header--overlay">
                <div class="Header-inner Header-inner--bottom" data-nc-group="bottom">
                    <div data-nc-container="bottom-left">
                        <nav class="Header-nav Header-nav--primary" data-nc-element="primary-nav"
                            data-content-field="navigation">

                            <div class="Header-nav-inner">
                                <a href="index.html" class="Header-nav-item Header-nav-item--active"
                                    data-test="template-nav">Home</a><a href="kookbbqmenu.html"
                                    class="Header-nav-item" data-test="template-nav">Menu</a><a href="about.html"
                                    class="Header-nav-item" data-test="template-nav">About</a><a
                                    href="reservations.html" class="Header-nav-item"
                                    data-test="template-nav">Reservations</a><a href="contact.html"
                                    class="Header-nav-item" data-test="template-nav">Contact</a>
                            </div>

                        </nav>
                    </div>
                    <div data-nc-container="bottom-center">

                        <a href="index.html" class="Header-branding" data-nc-element="branding"
                            data-content-field="site-title">


                            <img src="../images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1588627323969-8A99TT8UPKP5I543JTY3/kook-logo-gold-0126f7.png?format=1500w"
                                alt="Kook Korean BBQ" class="Header-branding-logo" />


                        </a>


                    </div>
                    <div data-nc-container="bottom-right">

                        <nav class="Header-nav Header-nav--secondary" data-nc-element="secondary-nav"
                            data-content-field="navigation">

                        </nav>

                    </div>
                </div>
            </header>

            <div class="Content-outer">


                <main class="Index" data-collection-id="5c4a47c71ae6cf770c90fd6e"
                    data-controller="IndexFirstSectionHeight, Parallax, IndexNavigation">

                    <section id="modern-organic-thai" class="Index-page Index-page--has-image"
                        data-parallax-original-element data-collection-id="5c4768b1cd83663a096f569f"
                        data-parallax-id="5c4768b1cd83663a096f569f" data-edit-main-image="Background">

                        <div class="Index-page-scroll-indicator hidden" data-controller="ScrollIndicator">
                            <div class="Index-page-scroll-indicator-text">Scroll</div>
                            <svg class="Index-page-scroll-indicator-arrow Icon Icon--caretLarge--down"
                                viewBox="0 0 48 23">
                                <use xlink:href="assets/ui-icons.svg#caret-down-large-icon"></use>
                            </svg>
                            <div class="Index-page-scroll-indicator-line"></div>
                        </div>

                        <div class="Index-page-content  sqs-alternate-block-style-container">
                            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page"
                                data-updated-on="1550694809322" id="page-5c4768b1cd83663a096f569f">
                                <div class="row sqs-row">
                                    <div class="col sqs-col-12 span-12">
                                        <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                                            id="block-yui_3_17_2_1_1549045800952_21703">
                                            <div class="sqs-block-content">

                                                <div class="sqs-html-content">
                                                    <h2 style="text-align:center;white-space:pre-wrap;">Welcome to the
                                                        most exciting Korean BBQ in Vancouver! </h2>
                                                </div>






















                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <figure class="Index-page-image" data-parallax-image-wrapper>

                            <img data-src="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1548969390666-C048X88TCMR4YANWJ4JM/IMG_1752.jpg"
                                data-image="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1548969390666-C048X88TCMR4YANWJ4JM/IMG_1752.jpg"
                                data-image-dimensions="2500x1874" data-image-focal-point="0.47,0.8"
                                alt="IMG_1752.jpg" data-load="false" alt="" />

                        </figure>


                    </section>







                    <section id="about-02" class="Index-page" data-collection-id="5c4b8a5e42bfc120277d72fc"
                        data-parallax-id="5c4b8a5e42bfc120277d72fc" data-edit-main-image="Background">

                        <div class="Index-page-content ">
                            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page"
                                data-updated-on="1588614612834" id="page-5c4b8a5e42bfc120277d72fc">
                                <div class="row sqs-row">
                                    <div class="col sqs-col-12 span-12">
                                        <div class="sqs-block gallery-block sqs-block-gallery"
                                            data-block-json="&#123;&quot;methodOption&quot;:&quot;transient&quot;,&quot;existingGallery&quot;:null,&quot;newWindow&quot;:false,&quot;aspect-ratio&quot;:&quot;standard-vertical&quot;,&quot;aspectRatio&quot;:null,&quot;auto-crop&quot;:true,&quot;blockAnimation&quot;:&quot;none&quot;,&quot;collectionId&quot;:&quot;5c4b8a5e42bfc120277d72f4&quot;,&quot;design&quot;:&quot;grid&quot;,&quot;lightbox&quot;:false,&quot;padding&quot;:24,&quot;show-meta&quot;:true,&quot;show-meta-basic&quot;:true,&quot;show-meta-only-title&quot;:false,&quot;show-meta-only-description&quot;:false,&quot;square-thumbs&quot;:false,&quot;thumbnails-per-row&quot;:4,&quot;vSize&quot;:null,&quot;transientGalleryId&quot;:&quot;5c4b8a5e42bfc120277d72f4&quot;&#125;"
                                            data-block-type="8" id="block-b174ee8f81c5986f3b50">
                                            <div class="sqs-block-content">









                                                <div
                                                    class="
  sqs-gallery-container
  sqs-gallery-block-grid
  sqs-gallery-aspect-ratio-standard-vertical
  sqs-gallery-thumbnails-per-row-4
  
  

  
    
    
  
  sqs-gallery-block-show-meta
  
  

  
  

  
  block-animation-none
  clear">
                                                    <div class="sqs-gallery">









                                                        <div class="slide" data-type="image"
                                                            data-animation-role="image">
                                                            <div class="margin-wrapper">

                                                                <a role="presentation"
                                                                    class="
                    image-slide-anchor
                    
                    content-fit
                  ">

                                                                    <noscript><img
                                                                            src="../images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692607364-1HX25SG0LRRBDPYJ7BHH/Kook-8.jpg"
                                                                            alt="Kook-8.jpg" /></noscript><img
                                                                        class="thumb-image"
                                                                        data-src="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692607364-1HX25SG0LRRBDPYJ7BHH/Kook-8.jpg"
                                                                        data-image="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692607364-1HX25SG0LRRBDPYJ7BHH/Kook-8.jpg"
                                                                        data-image-dimensions="2500x3745"
                                                                        data-image-focal-point="0.5,0.5"
                                                                        alt="Kook-8.jpg" data-load="false"
                                                                        data-image-id="5e83bfa38022342990fbaa9a"
                                                                        data-type="image" />
                                                                </a>

                                                            </div>
                                                        </div>













                                                        <div class="slide" data-type="image"
                                                            data-animation-role="image">
                                                            <div class="margin-wrapper">

                                                                <a role="presentation"
                                                                    class="
                    image-slide-anchor
                    
                    content-fit
                  ">

                                                                    <noscript><img
                                                                            src="../images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692610710-24BDH5UK382PB4JKDY2B/Kook-50.jpg"
                                                                            alt="Kook-50.jpg" /></noscript><img
                                                                        class="thumb-image"
                                                                        data-src="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692610710-24BDH5UK382PB4JKDY2B/Kook-50.jpg"
                                                                        data-image="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692610710-24BDH5UK382PB4JKDY2B/Kook-50.jpg"
                                                                        data-image-dimensions="2500x3745"
                                                                        data-image-focal-point="0.5,0.5"
                                                                        alt="Kook-50.jpg" data-load="false"
                                                                        data-image-id="5e83bfa8970e8e58270da576"
                                                                        data-type="image" />
                                                                </a>

                                                            </div>
                                                        </div>













                                                        <div class="slide" data-type="image"
                                                            data-animation-role="image">
                                                            <div class="margin-wrapper">

                                                                <a role="presentation"
                                                                    class="
                    image-slide-anchor
                    
                    content-fit
                  ">

                                                                    <noscript><img
                                                                            src="../images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692583395-DZ8C12Z5ICNZC0RI5IQ0/Kook-5.jpg"
                                                                            alt="Kook-5.jpg" /></noscript><img
                                                                        class="thumb-image"
                                                                        data-src="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692583395-DZ8C12Z5ICNZC0RI5IQ0/Kook-5.jpg"
                                                                        data-image="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692583395-DZ8C12Z5ICNZC0RI5IQ0/Kook-5.jpg"
                                                                        data-image-dimensions="2500x3745"
                                                                        data-image-focal-point="0.5,0.5"
                                                                        alt="Kook-5.jpg" data-load="false"
                                                                        data-image-id="5e83bf8f0dfa0d0c21abfeea"
                                                                        data-type="image" />
                                                                </a>

                                                            </div>
                                                        </div>













                                                        <div class="slide" data-type="image"
                                                            data-animation-role="image">
                                                            <div class="margin-wrapper">

                                                                <a role="presentation"
                                                                    class="
                    image-slide-anchor
                    
                    content-fit
                  ">

                                                                    <noscript><img
                                                                            src="../images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692579070-CLENMEFY4ADNUAD3Q6N4/Kook-7.jpg"
                                                                            alt="Kook-7.jpg" /></noscript><img
                                                                        class="thumb-image"
                                                                        data-src="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692579070-CLENMEFY4ADNUAD3Q6N4/Kook-7.jpg"
                                                                        data-image="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585692579070-CLENMEFY4ADNUAD3Q6N4/Kook-7.jpg"
                                                                        data-image-dimensions="2500x3745"
                                                                        data-image-focal-point="0.5,0.5"
                                                                        alt="Kook-7.jpg" data-load="false"
                                                                        data-image-id="5e83bf8f2bdce735b5fc5c67"
                                                                        data-type="image" />
                                                                </a>

                                                            </div>
                                                        </div>







                                                    </div>



                                                </div>




                                                <style type="text/css" id="design-grid-css">
                                                    #block-b174ee8f81c5986f3b50 .sqs-gallery-block-grid .sqs-gallery-design-grid {
                                                        margin-right: -24px;
                                                    }

                                                    #block-b174ee8f81c5986f3b50 .sqs-gallery-block-grid .sqs-gallery-design-grid-slide .margin-wrapper {
                                                        margin-right: 24px;
                                                        margin-bottom: 24px;
                                                    }
                                                </style>



                                            </div>
                                        </div>
                                        <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                                            id="block-310e3162239704f893a2">
                                            <div class="sqs-block-content">

                                                <div class="sqs-html-content">
                                                    <p style="text-align:center;white-space:pre-wrap;" class="">
                                                        At Kook, we are <strong>CRAZY</strong> about<strong>
                                                            BBQ</strong> and we are here to set a new standard to your
                                                        Korean BBQ experience. Serving only premium meats, every table
                                                        is equipped with the Rolls-Royce<br>of smokeless grills (Shinpo
                                                        Systems).&nbsp; The restaurant is perfectly air balanced with
                                                        the best ventilation system to ensure you smell the same way you
                                                        came in.&nbsp;</p>
                                                    <p style="text-align:center;white-space:pre-wrap;" class="">
                                                        We want to ensure that we please your eyes as much as your taste
                                                        buds.&nbsp; Our interior design is themed around the ancient
                                                        five core elements (Gold, wood, water, fire, earth). From our
                                                        golden ring of banchan to the cherry wood bench you are sitting
                                                        on, you will find this theme throughout our restaurant. Let our
                                                        energy channel your inner chef to take control and cook, or
                                                        simply sit back and let our BBQ experts take over.</p>
                                                    <p style="text-align:center;white-space:pre-wrap;" class="">
                                                        Our dedicated team is here to serve you with one goal in
                                                        mind:<br><strong><em>“A Korean BBQ dining experience you won’t
                                                                soon forget!”</em></strong></p>
                                                </div>






















                                            </div>
                                        </div>
                                        <div class="sqs-block button-block sqs-block-button" data-block-type="53"
                                            id="block-31a339d66502e82d642b">
                                            <div class="sqs-block-content">

                                                <div class="sqs-block-button-container sqs-block-button-container--center"
                                                    data-animation-role="button" data-alignment="center"
                                                    data-button-size="medium" data-button-type="primary">
                                                    <a href="kookbbqmenu.html"
                                                        class="sqs-block-button-element--medium sqs-button-element--primary sqs-block-button-element">
                                                        View Menu
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </section>







                    <section id="eat-together" class="Index-page Index-page--has-image" data-parallax-original-element
                        data-collection-id="5c4a4eb2f950b7808b449434" data-parallax-id="5c4a4eb2f950b7808b449434"
                        data-edit-main-image="Background">

                        <div class="Index-page-content  sqs-alternate-block-style-container">
                            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page"
                                data-updated-on="1550692609997" id="page-5c4a4eb2f950b7808b449434">
                                <div class="row sqs-row">
                                    <div class="col sqs-col-12 span-12">
                                        <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                                            id="block-c2dc0b66ff706542d4a2">
                                            <div class="sqs-block-content">

                                                <div class="sqs-html-content">
                                                    <h2 style="text-align:center;white-space:pre-wrap;">EAT
                                                        TOGETHER<br></h2>
                                                </div>






















                                            </div>
                                        </div>
                                        <div class="sqs-block button-block sqs-block-button" data-block-type="53"
                                            id="block-yui_3_17_2_3_1442344515890_5231">
                                            <div class="sqs-block-content">

                                                <div class="sqs-block-button-container sqs-block-button-container--center"
                                                    data-animation-role="button" data-alignment="center"
                                                    data-button-size="small" data-button-type="tertiary">
                                                    <a href="reservations.html"
                                                        class="sqs-block-button-element--small sqs-button-element--tertiary sqs-block-button-element">
                                                        Make a Reservation
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <figure class="Index-page-image" data-parallax-image-wrapper>

                            <img data-src="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585690892220-UOH8HZC3IBQZFIW7T9XA/Kook-49.jpg"
                                data-image="https://images.squarespace-cdn.com/content/v1/5c4766f7ee175955203ef26a/1585690892220-UOH8HZC3IBQZFIW7T9XA/Kook-49.jpg"
                                data-image-dimensions="2500x1392" data-image-focal-point="0.5,0.5" alt="Kook-49.jpg"
                                data-load="false" alt="" />

                        </figure>


                    </section>






                    <nav class="Index-nav">
                        <div class="Index-nav-inner">

                            <a href="#modern-organic-thai" class="Index-nav-item active">
                                <div class="Index-nav-indicator"></div>
                                <div class="Index-nav-text"><span>Modern Organic Thai</span></div>
                            </a>

                            <a href="#about-02" class="Index-nav-item">
                                <div class="Index-nav-indicator"></div>
                                <div class="Index-nav-text"><span>About 02</span></div>
                            </a>

                            <a href="#eat-together" class="Index-nav-item">
                                <div class="Index-nav-indicator"></div>
                                <div class="Index-nav-text"><span>Eat Together</span></div>
                            </a>

                        </div>
                    </nav>

                </main>

            </div>
        </div>

        <footer class="Footer" role="contentinfo" data-controller="FooterBreakpoints">

            <div class="Footer-inner clear">

                <div class="sqs-layout sqs-grid-12 columns-12 Footer-blocks Footer-blocks--top sqs-alternate-block-style-container empty"
                    data-layout-label="Footer Top Blocks" data-type="block-field" data-updated-on="1549323724828"
                    id="footerBlocksTop">
                    <div class="row sqs-row">
                        <div class="col sqs-col-12 span-12"></div>
                    </div>
                </div>

                <div class="Footer-middle">
                    <div class="Footer-business">


                        <div class="Footer-business-info">


                            <div class="Footer-business-info-item Footer-business-info-item--name">Kook BBQ</div>
                            <div class="Footer-business-info-item">2800 East 1st Avenue,</div>
                            <div class="Footer-business-info-item">Vancouver, BC, V5M 4P3,</div>
                            <div class="Footer-business-info-item Footer-business-info-item--country">Canada</div>




                            <a href="mailto:info@koookbbq.ca" title="info@koookbbq.ca" target="_blank"
                                class="Footer-business-info-item Footer-business-info-item--email">info@koookbbq.ca</a>

                        </div>




                        <div class="Footer-business-hours">
                            <div class="Footer-business-hours-heading">Hours</div>
                            <div class="Footer-business-hours-item">Mon 11:00 - 15:00, 17:00 - 22:00</div>
                            <div class="Footer-business-hours-item">Tue 11:00 - 15:00, 17:00 - 22:00</div>
                            <div class="Footer-business-hours-item">Wed 11:00 - 15:00, 17:00 - 22:00</div>
                            <div class="Footer-business-hours-item">Thu 11:00 - 15:00, 17:00 - 22:00</div>
                            <div class="Footer-business-hours-item">Fri 11:00 - 15:00, 17:00 - 22:00</div>
                            <div class="Footer-business-hours-item">Sat 11:00 - 15:00, 17:00 - 22:00</div>
                            <div class="Footer-business-hours-item">Sun 11:00 - 15:00, 17:00 - 22:00</div>
                        </div>



                    </div>

                    <div class="sqs-layout sqs-grid-12 columns-12 Footer-blocks Footer-blocks--middle sqs-alternate-block-style-container"
                        data-layout-label="Footer Middle Blocks" data-type="block-field"
                        data-updated-on="1681516948680" id="footerBlocksMiddle">
                        <div class="row sqs-row">
                            <div class="col sqs-col-8 span-8">
                                <div class="row sqs-row">
                                    <div class="col sqs-col-4 span-4">
                                        <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                                            id="block-0554e277b5a6bb1da859">
                                            <div class="sqs-block-content">

                                                <div class="sqs-html-content">
                                                    <h3 style="white-space:pre-wrap;"><strong>LOCATIONS</strong></h3>
                                                    <p class="" style="white-space:pre-wrap;"><a
                                                            href="https://www.google.com/search?rlz=1C1CHBF_enCA808CA808&amp;site=async/lcl_akp&amp;q=kook+korean+bbq+restaurant+address&amp;stick=H4sIAAAAAAAAAOPgE-LVT9c3NEyvNCyoKE9J15LNTrbSz8lPTizJzM-DM6wSU1KKUouLAS6HRJYwAAAA&amp;ludocid=11461357236156559500&amp;sa=X&amp;ved=2ahUKEwiM2c2iwIfgAhVKBjQIHfXZDQAQ6BMwA3oECAEQFg"
                                                            target="_blank"><strong>Address</strong></a><strong>:</strong><br>2800
                                                        E 1st Ave #211A<br>Vancouver, BC<br>V5M
                                                        4N9<br><br><strong>Phone: </strong><a
                                                            href="tel:6045665665">604.566.5665</a></p>
                                                </div>

























                                            </div>
                                        </div>
                                    </div>
                                    <div class="col sqs-col-4 span-4">
                                        <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                                            id="block-yui_3_17_2_22_1488316984327_15015">
                                            <div class="sqs-block-content">

                                                <div class="sqs-html-content">
                                                    <h3 style="white-space:pre-wrap;"><strong>HOURS</strong></h3>
                                                    <p class="" style="white-space:pre-wrap;">Monday
                                                        12:00pm-11:00pm<br>Tuesday 12:00pm-11:00pm<br>Wednesday
                                                        12:00pm-11:00pm<br>Thursday 12:00pm-11:00pm<br>Friday
                                                        12:00pm-12:00am<br>Saturday 12:00pm-12:00am<br>Sunday
                                                        12:00pm-11:00pm</p>
                                                </div>

























                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sqs-block socialaccountlinks-v2-block sqs-block-socialaccountlinks-v2"
                                    data-block-type="54" id="block-yui_3_17_2_1_1548712779604_6109">
                                    <div class="sqs-block-content">



                                        <div
                                            class="sqs-svg-icon--outer social-icon-alignment-left social-icons-color-white social-icons-size-large social-icons-shape-circle social-icons-style-knockout">
                                            <style>
                                                #block-yui_3_17_2_1_1548712779604_6109 .social-icons-style-border .sqs-svg-icon--wrapper {

                                                    box-shadow: 0 0 0 2px inset;

                                                    border: none;
                                                }
                                            </style>
                                            <nav class="sqs-svg-icon--list">
                                                <a href="mailto:info@kookbbq.ca" target="_blank"
                                                    class="sqs-svg-icon--wrapper email" aria-label="info@kookbbq.ca">
                                                    <div>
                                                        <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                                            <use class="sqs-use--icon" xlink:href="#email-icon"></use>
                                                            <use class="sqs-use--mask" xlink:href="#email-mask"></use>
                                                        </svg>
                                                    </div>
                                                </a><a href="https://www.facebook.com/kookbbq/" target="_blank"
                                                    class="sqs-svg-icon--wrapper facebook"
                                                    aria-label="Kook Korean BBQ">
                                                    <div>
                                                        <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                                            <use class="sqs-use--icon" xlink:href="#facebook-icon">
                                                            </use>
                                                            <use class="sqs-use--mask" xlink:href="#facebook-mask">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </a><a href="http://instagram.com/kookbbq" target="_blank"
                                                    class="sqs-svg-icon--wrapper instagram"
                                                    aria-label="Kook Korean BBQ">
                                                    <div>
                                                        <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                                            <use class="sqs-use--icon" xlink:href="#instagram-icon">
                                                            </use>
                                                            <use class="sqs-use--mask" xlink:href="#instagram-mask">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sqs-col-4 span-4">
                                <div class="sqs-block map-block sqs-block-map" data-aspect-ratio="54.72837022132797"
                                    data-block-json="&#123;&quot;location&quot;:&#123;&quot;mapLat&quot;:49.26916370000001,&quot;mapLng&quot;:-123.0463411,&quot;mapZoom&quot;:12,&quot;markerLat&quot;:49.26916370000001,&quot;markerLng&quot;:-123.0463411,&quot;addressLine1&quot;:&quot;2800 E 1st Ave #211A&quot;,&quot;addressLine2&quot;:&quot;Vancouver, BC&quot;,&quot;addressCountry&quot;:&quot;Canada&quot;,&quot;addressTitle&quot;:&quot;Kook BBQ&quot;&#125;,&quot;vSize&quot;:null,&quot;style&quot;:2,&quot;labels&quot;:true,&quot;terrain&quot;:false,&quot;controls&quot;:false,&quot;hSize&quot;:null,&quot;floatDir&quot;:null,&quot;aspectRatio&quot;:54.72837022132797&#125;"
                                    data-block-type="4" id="block-yui_3_17_2_1_1548371255737_19802">
                                    <div class="sqs-block-content">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sqs-layout sqs-grid-12 columns-12 Footer-blocks Footer-blocks--bottom sqs-alternate-block-style-container"
                    data-layout-label="Footer Bottom Blocks" data-type="block-field" data-updated-on="1548370757103"
                    id="footerBlocksBottom">
                    <div class="row sqs-row">
                        <div class="col sqs-col-12 span-12">
                            <div class="row sqs-row">
                                <div class="col sqs-col-0 span-0"></div>
                                <div class="col sqs-col-12 span-12">
                                    <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1"
                                        data-block-type="21" id="block-yui_3_17_2_22_1488316984327_21907">
                                        <div class="sqs-block-content">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </footer>


    </div>

    <script defer="defer" src="../static1.squarespace.com/static/ta/55f0a9b0e4b0f3eb70352f6d/352/scripts/site-bundle.js"
        type="text/javascript"></script>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
        <symbol id="email-icon" viewBox="0 0 64 64">
            <path d="M17,22v20h30V22H17z M41.1,25L32,32.1L22.9,25H41.1z M20,39V26.6l12,9.3l12-9.3V39H20z" />
        </symbol>
        <symbol id="email-mask" viewBox="0 0 64 64">
            <path
                d="M41.1,25H22.9l9.1,7.1L41.1,25z M44,26.6l-12,9.3l-12-9.3V39h24V26.6z M0,0v64h64V0H0z M47,42H17V22h30V42z" />
        </symbol>
        <symbol id="facebook-icon" viewBox="0 0 64 64">
            <path
                d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z" />
        </symbol>
        <symbol id="facebook-mask" viewBox="0 0 64 64">
            <path
                d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z" />
        </symbol>
        <symbol id="instagram-icon" viewBox="0 0 64 64">
            <path
                d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z" />
        </symbol>
        <symbol id="instagram-mask" viewBox="0 0 64 64">
            <path
                d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z" />
        </symbol>
    </svg>

</body>

<!-- Mirrored from www.kookbbq.ca/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2023 16:42:35 GMT -->

</html>
