<?php

namespace Flynt\Components\SiteBanner;

use Flynt\Utils\Options;
use Flynt\FieldVariables;
use Timber\Timber;

Options::addGlobal(
    "SiteBanner",
    [
        [
            "label" => __("Visibility", "flynt"),
            "name" => "siteBannersActive",
            "type" => "true_false",
            "ui" => "yes",
            "default" => 1,
            "ui_on_text" => __("Show", "flynt"),
            "ui_off_text" => __("Hide", "flynt"),
            "instructions" => __("Affects all site banners", "flynt"),
            "message" => "",
        ],
        [
            "label" => __("Site banners", "flynt"),
            "name" => "siteBanner",
            "type" => "repeater",
            "collapsed" => 0,
            "min" => 0,
            "max" => 3,
            "layout" => "row",
            "button_label" => "Add Banner",
            "instructions" => __(
                "Site Banner message to display - keep it brief!",
                "flynt"
            ),
            "conditional_logic" => [
                [
                    [
                        "fieldPath" => "siteBannersActive",
                        "operator" => "==",
                        "value" => "1",
                    ],
                ],
            ],
            "sub_fields" => [
                [
                    [
                        "label" => __("Active", "flynt"),
                        "name" => "eachBannerActive",
                        "type" => "true_false",
                        "ui" => "yes",
                        "default" => 1,
                        "ui_on_text" => __("Show", "flynt"),
                        "ui_off_text" => __("Hide", "flynt"),
                        "instructions" => __(
                            "Affects this site banner only",
                            "flynt"
                        ),
                    ],
                    [
                        "label" => __("Banner title", "flynt"),
                        "name" => "siteBannerTitle",
                        "type" => "text",
                        "conditional_logic" => [
                            [
                                [
                                    "fieldPath" => "eachBannerActive",
                                    "operator" => "==",
                                    "value" => "1",
                                ],
                            ],
                        ],
                    ],
                    [
                        "label" => __("Banner sub-title", "flynt"),
                        "name" => "siteBannerSubtitle",
                        "type" => "text",
                        "conditional_logic" => [
                            [
                                [
                                    "fieldPath" => "eachBannerActive",
                                    "operator" => "==",
                                    "value" => "1",
                                ],
                            ],
                        ],
                    ],
                    [
                        "label" => __("Link button", "flynt"),
                        "name" => "siteBannerLink",
                        "type" => "link",
                        "return_format" => "array",
                        "conditional_logic" => [
                            [
                                [
                                    "fieldPath" => "eachBannerActive",
                                    "operator" => "==",
                                    "value" => "1",
                                ],
                            ],
                        ],
                    ],
                    [
                        "label" => __("Link text", "flynt"),
                        "name" => "siteBannerLinkText",
                        "type" => "text",
                        "conditional_logic" => [
                            [
                                [
                                    "fieldPath" => "eachBannerActive",
                                    "operator" => "==",
                                    "value" => "1",
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    "Site Banners"
);
