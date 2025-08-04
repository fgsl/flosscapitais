<?php
return [
    'service_manager' => [
        'abstract_factories' => [
            'Laminas\\Navigation\\Service\\NavigationAbstractServiceFactory',
            'Laminas\\Db\\Adapter\\AdapterAbstractServiceFactory',
            'Laminas\\Session\\Service\\ContainerAbstractServiceFactory'
        ],
        'aliases' => [
            'navigation' => 'Laminas\\Navigation\\Navigation',
            'Zend\\Navigation\\Navigation' => 'Laminas\\Navigation\\Navigation',
            'Zend\\Paginator\\AdapterPluginManager' => 'Laminas\\Paginator\\AdapterPluginManager',
            'Zend\\Paginator\\ScrollingStylePluginManager' => 'Laminas\\Paginator\\ScrollingStylePluginManager',
            'Laminas\\Db\\Adapter\\Adapter' => 'Laminas\\Db\\Adapter\\AdapterInterface',
            'Zend\\Db\\Adapter\\AdapterInterface' => 'Laminas\\Db\\Adapter\\AdapterInterface',
            'Zend\\Db\\Adapter\\Adapter' => 'Laminas\\Db\\Adapter\\Adapter',
            'Laminas\\Session\\SessionManager' => 'Laminas\\Session\\ManagerInterface',
            'Zend\\Session\\SessionManager' => 'Laminas\\Session\\SessionManager',
            'Zend\\Session\\Config\\ConfigInterface' => 'Laminas\\Session\\Config\\ConfigInterface',
            'Zend\\Session\\ManagerInterface' => 'Laminas\\Session\\ManagerInterface',
            'Zend\\Session\\Storage\\StorageInterface' => 'Laminas\\Session\\Storage\\StorageInterface',
            'MvcTranslator' => 'Laminas\\Mvc\\I18n\\Translator',
            'Zend\\Mvc\\I18n\\Translator' => 'Laminas\\Mvc\\I18n\\Translator',
            'HydratorManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
            'Zend\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
            'Zend\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManager',
            'InputFilterManager' => 'Laminas\\InputFilter\\InputFilterPluginManager',
            'Zend\\InputFilter\\InputFilterPluginManager' => 'Laminas\\InputFilter\\InputFilterPluginManager',
            'FilterManager' => 'Laminas\\Filter\\FilterPluginManager',
            'Zend\\Filter\\FilterPluginManager' => 'Laminas\\Filter\\FilterPluginManager',
            'TranslatorPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManager',
            'Zend\\I18n\\Translator\\TranslatorInterface' => 'Laminas\\I18n\\Translator\\TranslatorInterface',
            'Zend\\I18n\\Translator\\LoaderPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManager',
            'Laminas\\I18n\\Geography\\CountryCodeListInterface' => 'Laminas\\I18n\\Geography\\DefaultCountryCodeList',
            'Laminas\\Translator\\TranslatorInterface' => 'Laminas\\I18n\\Translator\\TranslatorInterface',
            'HttpRouter' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'router' => 'Laminas\\Router\\RouteStackInterface',
            'Router' => 'Laminas\\Router\\RouteStackInterface',
            'RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'Zend\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouteStackInterface',
            'Laminas\\Validator\\Translator\\TranslatorInterface' => 'Laminas\\Validator\\Translator\\Translator',
            'ValidatorManager' => 'Laminas\\Validator\\ValidatorPluginManager',
            'Zend\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManager'
        ],
        'delegators' => [
            'ViewHelperManager' => [
                'Laminas\\Navigation\\View\\ViewHelperManagerDelegatorFactory'
            ],
            'HttpRouter' => [
                'Laminas\\Mvc\\I18n\\Router\\HttpRouterDelegatorFactory'
            ],
            'Laminas\\Router\\Http\\TreeRouteStack' => [
                'Laminas\\Mvc\\I18n\\Router\\HttpRouterDelegatorFactory'
            ]
        ],
        'factories' => [
            'Laminas\\Navigation\\Navigation' => 'Laminas\\Navigation\\Service\\DefaultNavigationFactory',
            'Laminas\\Paginator\\AdapterPluginManager' => 'Laminas\\Paginator\\AdapterPluginManagerFactory',
            'Laminas\\Paginator\\ScrollingStylePluginManager' => 'Laminas\\Paginator\\ScrollingStylePluginManagerFactory',
            'Laminas\\Db\\Adapter\\AdapterInterface' => 'Laminas\\Db\\Adapter\\AdapterServiceFactory',
            'Laminas\\Session\\Config\\ConfigInterface' => 'Laminas\\Session\\Service\\SessionConfigFactory',
            'Laminas\\Session\\ManagerInterface' => 'Laminas\\Session\\Service\\SessionManagerFactory',
            'Laminas\\Session\\Storage\\StorageInterface' => 'Laminas\\Session\\Service\\StorageFactory',
            'Laminas\\Mvc\\I18n\\Translator' => 'Laminas\\Mvc\\I18n\\TranslatorFactory',
            'Laminas\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManagerFactory',
            'Laminas\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManagerFactory',
            'Laminas\\InputFilter\\InputFilterPluginManager' => 'Laminas\\InputFilter\\InputFilterPluginManagerFactory',
            'Laminas\\Filter\\FilterPluginManager' => 'Laminas\\Filter\\FilterPluginManagerFactory',
            'Laminas\\I18n\\Translator\\TranslatorInterface' => 'Laminas\\I18n\\Translator\\TranslatorServiceFactory',
            'Laminas\\I18n\\Translator\\LoaderPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManagerFactory',
            'Laminas\\I18n\\Geography\\DefaultCountryCodeList' => [
                'Laminas\\I18n\\Geography\\DefaultCountryCodeList',
                'create'
            ],
            'Laminas\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\HttpRouterFactory',
            'Laminas\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManagerFactory',
            'Laminas\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouterFactory',
            'Laminas\\Validator\\Translator\\Translator' => 'Laminas\\Validator\\Translator\\TranslatorFactory',
            'Laminas\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManagerFactory',
            'Laminas\\Db\\Adapter' => 'Laminas\\Db\\Adapter\\AdapterServiceFactory'
        ]
    ],
    'validators' => [
        'factories' => [
            'Laminas\\Session\\Validator\\Csrf' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\Alnum' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\Alpha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\DateTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\IsFloat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\IsInt' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\PhoneNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\PostCode' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ],
        'aliases' => [
            'csrf' => 'Laminas\\Session\\Validator\\Csrf',
            'alnum' => 'Laminas\\I18n\\Validator\\Alnum',
            'Alnum' => 'Laminas\\I18n\\Validator\\Alnum',
            'alpha' => 'Laminas\\I18n\\Validator\\Alpha',
            'Alpha' => 'Laminas\\I18n\\Validator\\Alpha',
            'datetime' => 'Laminas\\I18n\\Validator\\DateTime',
            'dateTime' => 'Laminas\\I18n\\Validator\\DateTime',
            'DateTime' => 'Laminas\\I18n\\Validator\\DateTime',
            'float' => 'Laminas\\I18n\\Validator\\IsFloat',
            'Float' => 'Laminas\\I18n\\Validator\\IsFloat',
            'int' => 'Laminas\\I18n\\Validator\\IsInt',
            'Int' => 'Laminas\\I18n\\Validator\\IsInt',
            'isfloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'isFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'IsFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'isint' => 'Laminas\\I18n\\Validator\\IsInt',
            'isInt' => 'Laminas\\I18n\\Validator\\IsInt',
            'IsInt' => 'Laminas\\I18n\\Validator\\IsInt',
            'phonenumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'phoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'PhoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'postcode' => 'Laminas\\I18n\\Validator\\PostCode',
            'postCode' => 'Laminas\\I18n\\Validator\\PostCode',
            'PostCode' => 'Laminas\\I18n\\Validator\\PostCode',
            'Zend\\I18n\\Validator\\Alnum' => 'Laminas\\I18n\\Validator\\Alnum',
            'Zend\\I18n\\Validator\\Alpha' => 'Laminas\\I18n\\Validator\\Alpha',
            'Zend\\I18n\\Validator\\DateTime' => 'Laminas\\I18n\\Validator\\DateTime',
            'Zend\\I18n\\Validator\\IsFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'Zend\\I18n\\Validator\\IsInt' => 'Laminas\\I18n\\Validator\\IsInt',
            'Zend\\I18n\\Validator\\PhoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'Zend\\I18n\\Validator\\PostCode' => 'Laminas\\I18n\\Validator\\PostCode'
        ]
    ],
    'input_filters' => [
        'abstract_factories' => [
            'Laminas\\InputFilter\\InputFilterAbstractServiceFactory'
        ]
    ],
    'filters' => [
        'aliases' => [
            'alnum' => 'Laminas\\I18n\\Filter\\Alnum',
            'Alnum' => 'Laminas\\I18n\\Filter\\Alnum',
            'alpha' => 'Laminas\\I18n\\Filter\\Alpha',
            'Alpha' => 'Laminas\\I18n\\Filter\\Alpha',
            'numberformat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'numberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'NumberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'numberparse' => 'Laminas\\I18n\\Filter\\NumberParse',
            'numberParse' => 'Laminas\\I18n\\Filter\\NumberParse',
            'NumberParse' => 'Laminas\\I18n\\Filter\\NumberParse',
            'Zend\\I18n\\Filter\\Alnum' => 'Laminas\\I18n\\Filter\\Alnum',
            'Zend\\I18n\\Filter\\Alpha' => 'Laminas\\I18n\\Filter\\Alpha',
            'Zend\\I18n\\Filter\\NumberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'Zend\\I18n\\Filter\\NumberParse' => 'Laminas\\I18n\\Filter\\NumberParse'
        ],
        'factories' => [
            'Laminas\\I18n\\Filter\\Alnum' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Filter\\Alpha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Filter\\NumberFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Filter\\NumberParse' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ]
    ],
    'view_helpers' => [
        'aliases' => [
            'countryCodeDataList' => 'Laminas\\I18n\\View\\Helper\\CountryCodeDataList',
            'currencyformat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'currencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'CurrencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'dateformat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'dateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'DateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'numberformat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'numberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'NumberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
            'Plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
            'translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
            'Translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
            'translateplural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'translatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'TranslatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'Zend\\I18n\\View\\Helper\\CurrencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'Zend\\I18n\\View\\Helper\\DateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'Zend\\I18n\\View\\Helper\\NumberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'Zend\\I18n\\View\\Helper\\Plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
            'Zend\\I18n\\View\\Helper\\Translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
            'Zend\\I18n\\View\\Helper\\TranslatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'form' => 'Laminas\\Form\\View\\Helper\\Form',
            'formcheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'form_element' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'form_element_errors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'formhidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'form_label' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'formRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'formselect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'formsubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'formtext' => 'Laminas\\Form\\View\\Helper\\FormText',
            'formtextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'formInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'formnumber' => 'Laminas\\Form\\View\\Helper\\FormNumber'
        ],
        'factories' => [
            'Laminas\\I18n\\View\\Helper\\CountryCodeDataList' => 'Laminas\\I18n\\View\\Helper\\Container\\CountryCodeDataListFactory',
            'Laminas\\I18n\\View\\Helper\\CurrencyFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\DateFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\NumberFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\Plural' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\Translate' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\TranslatePlural' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Form' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormElement' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormHidden' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormLabel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormRow' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormText' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormInput' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ]
    ],
    'route_manager' => [],
    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'Application\\Controller\\IndexController',
                        'action' => 'index'
                    ]
                ]
            ],
            'application' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/:controller[/:action]',
                    'defaults' => [
                        'controller' => 'index',
                        'action' => 'index'
                    ]
                ]
            ],
            'orgao' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/orgao[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'orgao',
                        'action' => 'index'
                    ]
                ]
            ],
            'tipo-de-orgao' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/tipo-de-orgao[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'tipo-de-orgao',
                        'action' => 'index'
                    ]
                ]
            ],
            'software' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/software[/[:action[/:key[/filtern/:filtern/filterv/:filterv]]]]',
                    'defaults' => [
                        'controller' => 'software',
                        'action' => 'index',
                        'page' => 1
                    ]
                ]
            ],
            'categoria-de-software' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/categoria-de-software[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'categoria-de-software',
                        'action' => 'index'
                    ]
                ]
            ],
            'licenca' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/licenca[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'licenca',
                        'action' => 'index'
                    ]
                ]
            ],
            'protocolo' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/protocolo[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'protocolo',
                        'action' => 'index'
                    ]
                ]
            ],
            'software-de-orgao' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/software-de-orgao[/:action[/:key[/filtern/:filtern/filterv/:filterv]]]',
                    'defaults' => [
                        'controller' => 'software-de-orgao',
                        'action' => 'index'
                    ]
                ]
            ],
            'protocolo-de-orgao' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/protocolo-de-orgao[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'protocolo-de-orgao',
                        'action' => 'index'
                    ]
                ]
            ],
            'software-mais-usado' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/software-mais-usado[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'software-mais-usado',
                        'action' => 'index'
                    ]
                ]
            ],
            'categoria-mais-usada' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/categoria-mais-usada[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'categoria-mais-usada',
                        'action' => 'index'
                    ]
                ]
            ],
            'maior-orgao-usuario' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/maior-orgao-usuario[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'maior-orgao-usuario',
                        'action' => 'index'
                    ]
                ]
            ],
            'maior-tipo-orgao-usuario' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/maior-tipo-orgao-usuario[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'maior-tipo-de-orgao-usuario',
                        'action' => 'index'
                    ]
                ]
            ],
            'licenca-mais-usada' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/licenca-mais-usada[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'licenca-mais-usada',
                        'action' => 'index'
                    ]
                ]
            ],
            'indicador' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/indicador[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'indicador',
                        'action' => 'index'
                    ]
                ]
            ],
            'software-nao-livre-mais-usado' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/software-nao-livre-mais-usado[/:action[/:key]]',
                    'defaults' => [
                        'controller' => 'software-nao-livre-mais-usado',
                        'action' => 'index'
                    ]
                ]
            ],
            'produtores-de-software-livre' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/produtores-de-software-livre[/[:key]]',
                    'defaults' => [
                        'controller' => 'produtores-de-software-livre',
                        'action' => 'index'
                    ]
                ]
            ],
            'sistema-operacional-mais-usado' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/sistema-operacional-mais-usado[/[:key]]',
                    'defaults' => [
                        'controller' => 'sistema-operacional-mais-usado',
                        'action' => 'index'
                    ]
                ]
            ]
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            'laminas-developer-tools' => '/home/s275240018/fgsl/flosscapitais/vendor/laminas/laminas-developer-tools/config/../view',
            0 => '/home/s275240018/fgsl/flosscapitais/module/Application/config/../view'
        ],
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => '/home/s275240018/fgsl/flosscapitais/module/Application/config/../view/layout/layout.phtml',
            'application/index/index' => '/home/s275240018/fgsl/flosscapitais/module/Application/config/../view/application/index/index.phtml',
            'error/404' => '/home/s275240018/fgsl/flosscapitais/module/Application/config/../view/error/404.phtml',
            'error/index' => '/home/s275240018/fgsl/flosscapitais/module/Application/config/../view/error/index.phtml'
        ]
    ],
    'controllers' => [
        'aliases' => [
            'index' => 'Application\\Controller\\IndexController',
            'tipo-de-orgao' => 'Application\\Controller\\TipoDeOrgaoController',
            'orgao' => 'Application\\Controller\\OrgaoController',
            'licenca' => 'Application\\Controller\\LicencaController',
            'software' => 'Application\\Controller\\SoftwareController',
            'categoria-de-software' => 'Application\\Controller\\CategoriaDeSoftwareController',
            'protocolo' => 'Application\\Controller\\ProtocoloController',
            'software-de-orgao' => 'Application\\Controller\\SoftwareDeOrgaoController',
            'protocolo-de-orgao' => 'Application\\Controller\\ProtocoloDeOrgaoController',
            'software-mais-usado' => 'Application\\Controller\\SoftwareMaisUsadoController',
            'categoria-mais-usada' => 'Application\\Controller\\CategoriaMaisUsadaController',
            'maior-orgao-usuario' => 'Application\\Controller\\MaiorOrgaoUsuarioController',
            'maior-tipo-de-orgao-usuario' => 'Application\\Controller\\MaiorTipoDeOrgaoUsuarioController',
            'licenca-mais-usada' => 'Application\\Controller\\LicencaMaisUsadaController',
            'indicador' => 'Application\\Controller\\IndicadorController',
            'software-nao-livre-mais-usado' => 'Application\\Controller\\SoftwareNaoLivreMaisUsadoController',
            'produtores-de-software-livre' => 'Application\\Controller\\ProdutoresDeSoftwareLivreController',
            'sistema-operacional-mais-usado' => 'Application\\Controller\\SistemaOperacionalMaisUsadoController'
        ],
        'factories' => [
            'Application\\Controller\\IndexController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Application\\Controller\\TipoDeOrgaoController' => 'Application\\Controller\\TipoDeOrgaoControllerFactory',
            'Application\\Controller\\OrgaoController' => 'Application\\Controller\\OrgaoControllerFactory',
            'Application\\Controller\\LicencaController' => 'Application\\Controller\\LicencaControllerFactory',
            'Application\\Controller\\SoftwareController' => 'Application\\Controller\\SoftwareControllerFactory',
            'Application\\Controller\\CategoriaDeSoftwareController' => 'Application\\Controller\\CategoriaDeSoftwareControllerFactory',
            'Application\\Controller\\ProtocoloController' => 'Application\\Controller\\ProtocoloControllerFactory',
            'Application\\Controller\\SoftwareDeOrgaoController' => 'Application\\Controller\\SoftwareDeOrgaoControllerFactory',
            'Application\\Controller\\ProtocoloDeOrgaoController' => 'Application\\Controller\\ProtocoloDeOrgaoControllerFactory',
            'Application\\Controller\\SoftwareMaisUsadoController' => 'Application\\Controller\\SoftwareMaisUsadoControllerFactory',
            'Application\\Controller\\CategoriaMaisUsadaController' => 'Application\\Controller\\CategoriaMaisUsadaControllerFactory',
            'Application\\Controller\\MaiorOrgaoUsuarioController' => 'Application\\Controller\\MaiorOrgaoUsuarioControllerFactory',
            'Application\\Controller\\MaiorTipoDeOrgaoUsuarioController' => 'Application\\Controller\\MaiorTipoDeOrgaoUsuarioControllerFactory',
            'Application\\Controller\\LicencaMaisUsadaController' => 'Application\\Controller\\LicencaMaisUsadaControllerFactory',
            'Application\\Controller\\IndicadorController' => 'Application\\Controller\\IndicadorControllerFactory',
            'Application\\Controller\\SoftwareNaoLivreMaisUsadoController' => 'Application\\Controller\\SoftwareNaoLivreMaisUsadoControllerFactory',
            'Application\\Controller\\ProdutoresDeSoftwareLivreController' => 'Application\\Controller\\ProdutoresDeSoftwareLivreControllerFactory',
            'Application\\Controller\\SistemaOperacionalMaisUsadoController' => 'Application\\Controller\\SistemaOperacionalMaisUsadoControllerFactory'
        ]
    ],
    'db' => [
        'driver' => 'Pdo_Mysql',
        'database' => 'floss_capitais',
        'username' => 'root',
        'password' => ''
    ]
];
