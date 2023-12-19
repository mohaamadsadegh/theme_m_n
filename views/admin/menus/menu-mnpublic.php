<?php
class MNpublic extends MNmain
{
    public $name='MNpublic',$title='عمومی',$icon='fa fa-bars';

    public function fieldscontent()
    {
        loadwidgets::loadWidget('selectpagename',
            'جایگاه سایدبار',
            'برای انتخاب جایگاه سایدبار کلیک کنید',
            'radiobuttonimage', [
                'right',
                'center',
                'left'
            ]);
        loadwidgets::loadWidget('selectpagename',
            'جستجو های پر طرفدار',
            'جستجو های پر طرفدار',
            'colorpicker',
            []);
        loadwidgets::loadWidget('selectpagename',
            'جستجو های پر طرفدار',
            'جستجو های پر طرفدار',
            'textbox',
            []);
        loadwidgets::loadWidget('selectpagename',
            'متن سربرگ وبلاگ',
            'جایگاه متن سربرگ وبلاگ',
            'radiobuttonwithoutimg', [
                'راست',
                'وسط',
                'چپ'
            ]);
        loadwidgets::loadWidget('site-width',
            'عرض صفحه',
            'عرض صفحه اصلی خود را انتخاب کنید',
            'selector', [
                'راست',
                'وسط',
                'چپ'
            ]);
        loadwidgets::loadWidget('site-width',
            'عرض صفحه',
            'عرض صفحه اصلی خود را انتخاب کنید',
            'switcher',
            []
        );
        loadwidgets::loadWidget('site-width',
            'tmp_name',
            'عرض صفحه اصلی خود را انتخاب کنید',
            'uploadmedia',
            []
        );
        loadwidgets::loadWidget('site-width',
            'tmp_name',
            'عرض صفحه اصلی خود را انتخاب کنید',
            'texterea',
            []
        );


    }

}