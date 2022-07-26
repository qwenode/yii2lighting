<?php

//适用于GridView 与 DetailView 快速输入
const VIEW_ATTRIBUTE = 'attribute';
const VIEW_VALUE     = 'value';
const VIEW_LABEL     = 'label';

const VIEW_FORMAT            = 'format';
const VIEW_FORMAT_RAW        = 'raw';
const VIEW_FORMAT_HTML       = 'html';
const VIEW_FORMAT_TEXT       = 'text';
const VIEW_FORMAT_NTEXT      = 'ntext';
const VIEW_FORMAT_PARAGRAPHS = 'paragraphs';
const VIEW_FORMAT_EMAIL      = 'email';
const VIEW_FORMAT_IMAGE      = 'image';
const VIEW_FORMAT_URL        = 'url';
const VIEW_FORMAT_BOOLEAN    = 'boolean';

const VIEW_CLASS           = 'class';
const VIEW_OPTIONS         = 'options';
const VIEW_DROPDOWN_PROMPT = [
    'prompt' => '全部',
];
const VIEW_PLACEHOLDER     = 'placeholder';

const VIEW_ENCTYPE                    = 'enctype';
const VIEW_ENCTYPE_MULTIPART_FORMDATA = 'multipart/form-data';
const VIEW_FORM_UPLOAD_OPTIONS        = [
    VIEW_ENCTYPE => VIEW_ENCTYPE_MULTIPART_FORMDATA
];//ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])

//model 部分
const MODEL_RULE_REQUIRED                = 'required';
const MODEL_RULE_FILE                    = 'file';
const MODEL_RULE_FILE_SKIP_ON_EMPTY      = 'skipOnEmpty';
const MODEL_RULE_FILE_EXTENSIONS         = 'extensions';
const MODEL_RULE_IN                      = 'in';
const MODEL_RULE_IN_RANGE                = 'range';
const MODEL_RULE_STRING                  = 'string';
const MODEL_RULE_STRING_MIN              = 'min';
const MODEL_RULE_STRING_MAX              = 'max';
const MODEL_RULE_DEFAULT                 = 'default';
const MODEL_RULE_INTEGER                 = 'integer';
const MODEL_RULE_DEFAULT_VALUE           = 'value';
const MODEL_RULE_UNIQUE                  = 'unique';
const MODEL_RULE_UNIQUE_TARGET_ATTRIBUTE = 'targetAttribute';
const MODEL_RULE_EMAIL                   = 'email';
const MODEL_RULE_WHEN                    = 'when';
const MODEL_RULE_FILTER                  = 'filter';
const MODEL_RULE_INTEGER_MIN             = 'min';
const MODEL_RULE_INTEGER_MAX             = 'max';
const MODEL_QUERY_BETWEEN                = 'between';

//常用时间数字
const TIME_SECONDS_LABEL = 'seconds';
const TIME_MINUTES_LABEL = 'minutes';
const TIME_HOURS_LABEL   = 'hours';

const TIME_NUMBER_1     = 1;
const TIME_NUMBER_3     = 3;
const TIME_NUMBER_5     = 5;
const TIME_NUMBER_7     = 7;
const TIME_NUMBER_10    = 10;
const TIME_NUMBER_12    = 12;
const TIME_NUMBER_15    = 15;
const TIME_NUMBER_20    = 20;
const TIME_NUMBER_24    = 24;
const TIME_NUMBER_30    = 30;
const TIME_NUMBER_60    = 60;
const TIME_NUMBER_180   = 180;
const TIME_NUMBER_300   = 300;
const TIME_NUMBER_600   = 600;
const TIME_NUMBER_1800  = 1800;
const TIME_NUMBER_3600  = 3600;
const TIME_NUMBER_43200 = 43200;
const TIME_NUMBER_86400 = 86400;
