<?php
class MNpublic extends MNmain
{
    public $name='MNpublic',$title='عمومی',$icon='fa fa-bars';

    public function fieldscontent()
    {
        new Loadwidgets('selectpagename',
            'جایگاه سایدبار',
            'برای انتخاب جایگاه سایدبار کلیک کنید',
            'radiobuttonimage', [
                'right',
                'center',
                'left'
            ]);
        new Loadwidgets('selectpagename',
            'جستجو های پر طرفدار',
            'جستجو های پر طرفدار',
            'colorpicker',
            []);
        new Loadwidgets('selectpagename',
            'جستجو های پر طرفدار',
            'جستجو های پر طرفدار',
            'textbox',
            []);
        new Loadwidgets('selectpagename',
            'متن سربرگ وبلاگ',
            'جایگاه متن سربرگ وبلاگ',
            'radiobuttonwithoutimg', [
                'راست',
                'وسط',
                'چپ'
            ]);
        new Loadwidgets('site-width',
            'عرض صفحه',
            'عرض صفحه اصلی خود را انتخاب کنید',
            'selector', [
                'راست',
                'وسط',
                'چپ'
            ]);
        new Loadwidgets('site-width',
            'عرض صفحه',
            'عرض صفحه اصلی خود را انتخاب کنید',
            'switcher',
            []
        );
        new Loadwidgets('site-width',
            'tmp_name',
            'عرض صفحه اصلی خود را انتخاب کنید',
            'uploadmedia',
            []
        );


    }

}