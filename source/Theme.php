<?php
namespace WoowTheme;

use Woof\Theme\Theme as ThemeTheme;

class Theme extends ThemeTheme
{

    protected $parameters = [

        //===========================================================
        // Typographie
        //===========================================================


        /*
        'test-slider' => [
            'defaultValue' => '50',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Slider::class,
            'caption' => 'Test slider',
            'section' => 'typography',
        ],
        */


        'typography-font-family-default' => [
            'defaultValue' => 'verdana, helvetica, sans-serif',
            'instance' => null,

            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Default font family',
            'section' => 'typography',
        ],
        'typography-font-size-default' => [
            'defaultValue' => '16px',

            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Default font size',
            'section' => 'typography',
        ],
        'typography-font-size-biggest' => [
            'defaultValue' => '2rem',
            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Biggest font size',
            'section' => 'typography',

        ],

        'typography-font-size-big' => [
            'defaultValue' => '1.5rem',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Biggest font size',
            'section' => 'typography',
        ],
        'typography-font-size-small' => [
            'defaultValue' => '0.75rem',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Small font size',
            'section' => 'typography',
        ],
        'typography-font-size-smallest' => [
            'defaultValue' => '0.5rem',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Smallest font size',
            'section' => 'typography',
        ],

        //===========================================================
        // Layout
        //===========================================================

        'layout-gutter-default' => [
            'defaultValue' => '16px',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Gutter default size',
            'section' => 'layout',
        ],

        'layout-padding-default' => [
            'defaultValue' => '1rem',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Default padding',
            'section' => 'layout',
        ],

        'layout-border-default-width' => [
            'defaultValue' => '1px',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\CSSVariable::class,
            'caption' => 'Border default width',
            'section' => 'layout',
        ],


        'layout-border-default-color' => [
            'defaultValue' => '#000',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Color::class,
            'caption' => 'Border default color',
            'section' => 'layout',
        ],

        //===========================================================
        // Color
        //===========================================================

        'color-background-default' => [
            'defaultValue' => '#ccc',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Color::class,
            'caption' => 'Background default color',
            'section' => 'color',
        ],
        'color-foreground-default' => [
            'defaultValue' => '#000',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Color::class,
            'caption' => 'Foreground default color',
            'section' => 'color',
        ],

        'color-background-00' => [
            'defaultValue' => 'transparent',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Color::class,
            'caption' => 'Background 00 color',
            'section' => 'color',
        ],
        'color-foreground-00' => [
            'defaultValue' => '#000',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Color::class,
            'caption' => 'Foreground 00 color',
            'section' => 'color',
        ],


        'color-background-header-00' => [
            'defaultValue' => '#ccc',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Color::class,
            'caption' => 'Background header color',
            'section' => 'color',
        ],
        'color-foreground-header-00' => [
            'defaultValue' => '#000',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Color::class,
            'caption' => 'Foreground header color',
            'section' => 'color',
        ],

        //===========================================================
        // Content
        //===========================================================
        'content-header-title' => [
            'defaultValue' => 'Header content title',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\TextContent::class,
            'caption' => 'Header title',
            'section' => 'content',
            'partialSelector' => 'header.customizer.header h2',
        ],
        'content-header-subtitle' => [
            'defaultValue' => 'Header content subtitle',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\TextContent::class,
            'caption' => 'Header subtitle',
            'section' => 'content',
            'partialSelector' => 'header.customizer.header p',
        ],
        'content-header-image' => [
            'defaultValue' => 'Header image',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Image::class,
            'caption' => 'Header image',
            'section' => 'content',
            'partialSelector' => 'header.customizer.header',
        ],

        //===========================================================
        // Content
        //===========================================================
        'customizer-demo-slider' => [
            'defaultValue' => '50',
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Slider::class,
            'caption' => 'Slider demo',
            'section' => 'customizers',
            'parameters' => [
                'min' => 0,
                'max' => 150
            ]
            // 'partialSelector' => 'header.customizer.header',
        ],

        'customizer-demo-calendar' => [
            'defaultValue' => null,
            'instance' => null,
            'type' => \Woof\Theme\Customizer\Calendar::class,
            'caption' => 'Calendar demo',
            'section' => 'customizers',
            'parameters' => [
                'locale' => 'en'
            ],
            // 'partialSelector' => 'header.customizer.header',
        ],

        'customizer-demo-post-selector' => [
            'defaultValue' => null,
            'instance' => null,
            'type' => \Woof\Theme\Customizer\PostSelector::class,
            'caption' => 'Post selector demo',
            'section' => 'customizers',
            'parameters' => [
                'postType' => 'test'
            ],
            // 'partialSelector' => 'header.customizer.header',
        ],

    ];

    protected $customizerSections = [
        'customizers' => [
            'caption' => 'Customizers',
            'order' => 10,
            'description' => 'Customizers demo',
        ],
        'layout' => [
            'caption' => 'Layout',
            'order' => 10,
            'description' => 'Layout rules',
        ],
        'typography' => [
            'caption' => 'Typography',
            'order' => 10,
            'description' => 'Typography rules',
        ],
        'color' => [
            'caption' => 'Colors',
            'order' => 10,
            'description' => 'Theme colors',
        ],
        'content' => [
            'caption' => 'Contents',
            'order' => 10,
            'description' => 'Theme content',
        ],
    ];



    public function registerCustomizerAssets()
    {

        $this->registerScript(
            'customizer-js',
            'assets/customizer/customizer.js'
        );

        $this->registerCSS(
            'customizer-css',
            'assets/customizer/customizer.css'
        );
        return $this;
    }

    public function registerAssets()
    {

        $this->registerScript(
            'vue-vendor-js',
            'assets/vuejs/dist/js/chunk-vendors.js'
        );

        $this->registerScript(
            'vue-app-js',
            'assets/vuejs/dist/js/app.js'
        );



        $this->registerCSS(
            'vue-vendor-css',
            'assets/vuejs/dist/css/chunk-vendors.css'
        );

        $this->registerCSS(
            'vue-app-css',
            'assets/vuejs/dist/css/app.css'
        );


        $this->registerScript(
            'woof-js',
            'assets/woof/javascript/woof.js'
        );

        $this->registerCSS(
            'woof-css',
            'assets/woof/css/woof.css'
        );
        return $this;
    }


}