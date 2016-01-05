<?php

// require_once('functions/_slideshow.php');

/*
1- root_part_qwe
2- header_part_qwe
3- slideshow_part_qwe
4- nav_part_qwe
5- curasul_part_qwe
6- page_part_qwe
7- sidebare_part_qwe
8- footer_part_qwe
9- media_part_qwe
10- media_part_lte_1200__qwe
11- media_part_lte_992__qwe 
12- media_part_lte_768__qwe
13- media_part_lte_500__qwe
14- media_part_lte_350__qwe
15- custome_part_qwe
*/

/* _slideshow.php start*/

function qwe_slideshow($wp_customize)
{

    $wp_customize->add_section('slideshow',array(
        'title' =>'Slide Show' ,
        'description' => 'Upload your slideshow images , with 400 pixel exact height',
        'priority' => '99' ));

//   logo

        $wp_customize->add_setting('logo_id',array('default' => '' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_id',array(
            'label' =>'Upload Logo Image',
            'description'=>'add logo image [ for best performance add png image type with transperent background]',
            'priority'=>1,
            'section' => 'slideshow' ,
            'settings' => 'logo_id' )));

// slide 1

        $wp_customize->add_setting('image1_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image1.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image1_id',array(
            'label' =>'Upload Image 1',
            'priority'=>1,
            'section' => 'slideshow' ,
            'settings' => 'image1_id' )));

        $wp_customize->add_setting('description1_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc1_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description1_id', 
                'type' => 'textarea',
                'label' => 'Description 1',
                'priority'=>2,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('text_description_link1_id',array('default' => '#' ));

        $wp_customize->add_control('txt_description_link1_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link1_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>3,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('button1_id',array('default' => 'link 1' ));
        $wp_customize->add_control('btn1_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button1_id', 
                'type' => 'text',
                'label' => 'Button link text 1',
                'priority'=>4,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                

        $wp_customize->add_setting('button_description_link1_id',array('default' => '#' ));

        $wp_customize->add_control('btn_description_link1_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link1_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>5,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                

//slide 2

        $wp_customize->add_setting('image2_id', array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image2.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image2_id',array(
            'label' =>'Upload Image 2',
            'priority'=>6,
            'section' => 'slideshow' ,
            'settings' => 'image2_id',)));

        $wp_customize->add_setting('description2_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc2_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description2_id', 
                'type' => 'textarea',
                'label' => 'Description 2',
                'priority'=>7,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('text_description_link2_id',array('default' => '#' ));

        $wp_customize->add_control('txt_description_link2_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link2_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>8,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('button2_id',array('default' => 'link 2' ));
        $wp_customize->add_control('btn2_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button2_id', 
                'type' => 'text',
                'label' => 'Button link text 2',
                'priority'=>9,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                

        $wp_customize->add_setting('button_description_link2_id',array('default' => '#' ));

        $wp_customize->add_control('btn_description_link2_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link2_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>10,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                

// slide 3
                        
        $wp_customize->add_setting('image3_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image3.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image3_id',array(
            'label' =>'Upload Image 3',
            'priority'=>11,
            'section' => 'slideshow' ,
            'settings' => 'image3_id' )));

        $wp_customize->add_setting('description3_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc3_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description3_id', 
                'type' => 'textarea',
                'label' => 'Description 3',
                'priority'=>12,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('text_description_link3_id',array('default' => '#' ));

        $wp_customize->add_control('txt_description_link3_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link3_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>13,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


                
        $wp_customize->add_setting('button3_id',array('default' => 'link 3' ));
        $wp_customize->add_control('btn3_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button3_id', 
                'type' => 'text',
                'label' => 'Button link text 3',
                'priority'=>14,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('button_description_link3_id',array('default' => '#' ));

        $wp_customize->add_control('btn_description_link3_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link3_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>15,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


//slide 4

        $wp_customize->add_setting('image4_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image4.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image4_id',array(
            'label' =>'Upload Image 4',
            'priority'=>16,
            'section' => 'slideshow' ,
            'settings' => 'image4_id' )));

        $wp_customize->add_setting('description4_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc4_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description4_id', 
                'type' => 'textarea',
                'label' => 'Description',
                'priority'=>17,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                
        $wp_customize->add_setting('text_description_link4_id',array('default' => '#' ));
        $wp_customize->add_control('txt_description_link4_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link4_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>18,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('button_description_link4_id',array('default' => '#' ));
        $wp_customize->add_control('btn_description_link4_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link4_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>19,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );



        $wp_customize->add_setting('button4_id',array('default' => 'link 4' ));
        $wp_customize->add_control('btn4_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button4_id', 
                'type' => 'text',
                'label' => 'Button link text 4',
                'priority'=>20,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


//slide 5

        $wp_customize->add_setting('image5_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image5.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image5_id',array(
            'label' =>'Upload Image 5',
            'priority'=>21,
            'section' => 'slideshow' ,
            'settings' => 'image5_id' )));


        $wp_customize->add_setting('description5_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc5_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description5_id', 
                'type' => 'textarea',
                'label' => 'Description',
                'priority'=>22,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('text_description_link5_id',array('default' => '#' ));
        $wp_customize->add_control('txt_description_link5_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link5_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>23,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );

                
        $wp_customize->add_setting('button5_id',array('default' => 'link 5' ));
        $wp_customize->add_control('btn5_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button5_id', 
                'type' => 'text',
                'label' => 'Button link text 5',
                'priority'=>24,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );

        $wp_customize->add_setting('button_description_link5_id',array('default' => '#' ));
        $wp_customize->add_control('btn_description_link5_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link5_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>25,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );





//slide 6

        $wp_customize->add_setting('image6_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image6.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image6_id',array(
            'label' =>'Upload Image 6',
            'priority'=>26,
            'section' => 'slideshow' ,
            'settings' => 'image6_id' )));

        $wp_customize->add_setting('description6_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc6_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description6_id', 
                'type' => 'textarea',
                'label' => 'Description',
                'priority'=>27,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('text_description_link6_id',array('default' => '#' ));
        $wp_customize->add_control('txt_description_link6_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link6_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>28,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );

        $wp_customize->add_setting('button6_id',array('default' => 'link 6' ));
        $wp_customize->add_control('btn6_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button6_id', 
                'type' => 'text',
                'label' => 'Button link text 6',
                'priority'=>29,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );

        $wp_customize->add_setting('button_description_link6_id',array('default' => '#' ));
        $wp_customize->add_control('btn_description_link6_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link6_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>30,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                




//slide 7


        $wp_customize->add_setting('image7_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image7.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image7_id',array(
            'label' =>'Upload Image 7',
            'priority'=>31,
            'section' => 'slideshow' ,
            'settings' => 'image7_id' )));

        $wp_customize->add_setting('description7_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc7_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description7_id', 
                'type' => 'textarea',
                'label' => 'Description',
                'priority'=>32,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('text_description_link7_id',array('default' => '#' ));
        $wp_customize->add_control('txt_description_link7_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link7_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>33,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('button7_id',array('default' => 'link 7' ));
        $wp_customize->add_control('btn7_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button7_id', 
                'type' => 'text',
                'label' => 'Button link text 7',
                'priority'=>34,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );



        $wp_customize->add_setting('button_description_link7_id',array('default' => '#' ));
        $wp_customize->add_control('btn_description_link7_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link7_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>35,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                



//slide 8  


        $wp_customize->add_setting('image8_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image8_id',array(
            'label' =>'Upload Image 8',         
            'priority'=>36,
            'section' => 'slideshow' ,
            'settings' => 'image8_id' )));

    
        $wp_customize->add_setting('description8_id',array('default' => 'write your description' ));
        $wp_customize->add_control('desc8_id',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description8_id', 
                'type' => 'textarea',
                'label' => 'Description',
                'priority'=>37,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('text_description_link8_id',array('default' => '#' ));
        $wp_customize->add_control('txt_description_link8_id',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link8_id', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>38,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );

        $wp_customize->add_setting('button8_id',array('default' => 'link 8' ));
        $wp_customize->add_control('btn8_id',array(
                'description' =>'add link text to your button',        
                'settings' => 'button8_id', 
                'type' => 'text',
                'label' => 'Button link text 8',
                'priority'=>39,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );



        $wp_customize->add_setting('button_description_link8_id',array('default' => '#' ));
        $wp_customize->add_control('btn_description_link8_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link8_id', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>40,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                
                
            )
        );
                
//indicators   indicator_image1_id


    $wp_customize->add_section('sticky',array(
        'title' =>'3 Sticky Indicators Images' ,
        'description' => 'Change Sticky Images and there descriptions and buttons titles ',
        'priority' => '99' ));

//1
        $wp_customize->add_setting('indicator_image1_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'indicator_image1_id',array(
            'label' =>'Upload Indicator Image 1',         
            'priority'=>41,
            'section' => 'sticky' ,
            'settings' => 'indicator_image1_id' )));

        $wp_customize->add_setting('indicator1_description_link_id',array('default' => '#' ));
        $wp_customize->add_control('indi1_description_id',array(
                'description' =>'add hyperlink to your image',        
                'settings' => 'indicator1_description_link_id', 
                'type' => 'text',
                'label' => 'Indicator Image 1',
                'priority'=>42,
                'section' => 'sticky',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('indicator1_id',array('default' => 'write your indicator description here' ));
        $wp_customize->add_control('indi1_id',array(
                'description' =>'add your description for image 1',        
                'settings' => 'indicator1_id', 
                'type' => 'textarea',
                'label' => 'Indicator image 1 Description',
                'priority'=>43,
                'section' => 'sticky',
                'transport' => 'postMessage',
                
                
            )
        );

        $wp_customize->add_setting('button_indicator1_id',array('default' => 'button1' ));
        $wp_customize->add_control('button_indi1_id',array(
                'description' =>'add button 1 text',        
                'settings' => 'button_indicator1_id', 
                'type' => 'text',
                'label' => 'Button 1',
                'priority'=>44,
                'section' => 'sticky',
                'transport' => 'postMessage',
                'default' => 'button1',
                
            )
        );
 
        $wp_customize->add_setting('button_indicator1_link_id',array('default' => '#' ));
        $wp_customize->add_control('button_indi1_link_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_indicator1_link_id', 
                'type' => 'text',
                'label' => 'Indicator Image 1 Button',
                'priority'=>45,
                'section' => 'sticky',
                'transport' => 'postMessage',
                
                
            )
        );




// 2

        $wp_customize->add_setting('indicator_image2_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'indicator_image2_id',array(
            'label' =>'Upload Indicator Image 2',         
            'priority'=>46,
            'section' => 'sticky' ,
            'settings' => 'indicator_image2_id' )));

        $wp_customize->add_setting('indicator2_description_link_id',array('default' => '#' ));
        $wp_customize->add_control('indi2_description_id',array(
                'description' =>'add hyperlink to your image',        
                'settings' => 'indicator2_description_link_id', 
                'type' => 'text',
                'label' => 'Indicator Image 2',
                'priority'=>47,
                'section' => 'sticky',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('indicator2_id',array('default' => 'write your indicator description here' ));
        $wp_customize->add_control('indi2_id',array(
                'description' =>'add your description for image 2',        
                'settings' => 'indicator2_id', 
                'type' => 'textarea',
                'label' => 'Indicator image 2 Description',
                'priority'=>48,
                'section' => 'sticky',
                'transport' => 'postMessage',
                
                
            )
        );

        $wp_customize->add_setting('button_indicator2_id',array('default' => 'button2' ));
        $wp_customize->add_control('button_indi2_id',array(
                'description' =>'add button 2 text',        
                'settings' => 'button_indicator2_id', 
                'type' => 'text',
                'label' => 'Button 2',
                'priority'=>49,
                'section' => 'sticky',
                'transport' => 'postMessage',
                'default' => 'button2',
                
            )
        );
 

        $wp_customize->add_setting('button_indicator2_link_id',array('default' => '#' ));
        $wp_customize->add_control('button_indi2_link_id',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_indicator2_link_id', 
                'type' => 'text',
                'label' => 'Indicator Image 2 Button',
                'priority'=>50,
                'section' => 'sticky',
                'transport' => 'postMessage',
                'default' => '#'
                
            )
        );



//3

        $wp_customize->add_setting('indicator_image3_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'indicator_image3_id',array(
            'label' =>'Upload Indicator Image 3',         
            'priority'=>51,
            'section' => 'sticky' ,
            'settings' => 'indicator_image3_id' )));


        $wp_customize->add_setting('indicator3_description_link_id',array('default' => '#' ));
        $wp_customize->add_control('indi3_description_id',array(
                'description' =>'add hyperlink to your image',        
                'settings' => 'indicator3_description_link_id', 
                'type' => 'text',
                'label' => 'Indicator Image 3',
                'priority'=>52,
                'section' => 'sticky',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('indicator3_id',array('default' => 'write your indicator description here' ));
        $wp_customize->add_control('indi3_id',array(
                'description' =>'add your description for image 3',        
                'settings' => 'indicator3_id', 
                'type' => 'textarea',
                'label' => 'Indicator image 3 Description',
                'priority'=>53,
                'section' => 'sticky',
                'transport' => 'postMessage',
                
                
            )
        );


        $wp_customize->add_setting('button_indicator3_id',array('default' => 'button3' ));
        $wp_customize->add_control('button_indi3_id',array(
                'description' =>'add button 3 text',        
                'settings' => 'button_indicator3_id', 
                'type' => 'text',
                'label' => 'Button 3',
                'priority'=>54,
                'section' => 'sticky',
                'transport' => 'postMessage',
                'default' => 'button3',
                
            )
        );
 
        $wp_customize->add_setting('button_indicator3_link_id',array('default' => '#' ));
        $wp_customize->add_control('button_indi3_link_id',array(
                'description' =>'add hyperlink text to your button',        
                'settings' => 'button_indicator3_link_id', 
                'type' => 'text',
                'label' => 'Indicator Image 3 Button',
                'priority'=>55,
                'section' => 'sticky',
                'transport' => 'postMessage',
                'default' => '#',
                
            )
        );




}
add_action('customize_register','qwe_slideshow' );

/* _slideshow.php end*/
 

/**********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************
***********************************************************************************/

/******************
**            *****
**   *******  *****
**   *******  *****
**   *******  *****
**   *******  *****
**            *****
**   *******  *****
**   *******  *****
**   *******  *****
**   *******  *****
**   *******  *****
*******************

*******************
**   **************
**   **************
**   **************
**   **************
**   **************
**            *****
**   *******  *****
**   *******  *****
**   *******  *****
**   *******  *****
**            *****
*******************

/****************
**            ***
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**            ***
*****************

*******************
************   ****
************   ****
************   ****
************   ****
************   ****
**             ****
**   *******   ****
**   *******   ****
**   *******   ****
**   *******   ****
**             ****
*******************

********************
**            ******
**   ***************
**   ***************
**   ***************
**   ***************
**            ******
**   ***************
**   ***************
**   ***************
**   ***************
**            ******
********************


********************
**            ******
**   ***************
**   ***************
**   ***************
**   ***************
**            ******
**   ***************
**   ***************
**   ***************
**   ***************
********************


********************
**            ******
**   ***************
**   ***************
**   ***************
**   ***************
**   ***************
**   ****        ***
**   **********  ***
**   **********  ***
**   **********  ***
**               ***
********************

*****************       
**   ******   ***       
**   ******   ***       
**   ******   ***       
**   ******   ***       
**   ******   ***       
**            ***       
**   ******   ***       
**   ******   ***       
**   ******   ***       
**   ******   ***       
*****************       

****************
***         ****
******   *******
******   *******
******   *******
******   *******
******   *******
******   *******
******   *******
******   *******
***         ****
****************

*******************
*********       ***
*************   ***
*************   ***
*************   ***
*************   ***
*************   ***
***      ****   ***
***   *******   ***
***   *******   ***
***   *******   ***
***             ***
*******************


*****************
***    *****   **
***    ****   ***
***    ***   ****
***    **   *****
***    *   ******
***     *********
***    *   ******
***    **   *****
***    ***   ****
***    ****   ***
***    *****   **
*****************
/*
*****************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**   ************
**             **
*****************

*/


/***************************************************************************************************
**            *****                    *****   *************                    ****             ***
**   **************   **************   *****   *************   **************   ****   ********  ***
**   **************   ***        ***   *****   *************   ***        ***   ****   ********  ***
**   **************   ***        ***   *****   *************   ***        ***   ****   ********  ***
**   **************   ***        ***   *****   *************   ***        ***   ****   **        ***
**   **************   ***        ***   *****   *************   ***        ***   ****   **    *******
**   **************   ***        ***   *****   *************   ***        ***   ****   ***    ******
**   **************   ***        ***   *****   *************   ***        ***   ****   ****    *****
**   **************   ***        ***   *****   *************   ***        ***   ****   *****    ****
**   **************   **************   *****   *************   **************   ****   ******    ***
**            *****                    *****            ****                    ****   *******    **
****************************************************************************************************



/** qwe_customize_theme */
function qwe_customize_theme($wp_customize){

// add panel
//     $wp_customize->add_panel( 'panel_id', array(
//     'priority'       => 10,
//     'capability'     => 'edit_theme_options',
//     'theme_supports' => '',
//     'title'          => 'panel',
//     'description'    => 'ok ok ok ',
// ));


    $wp_customize->add_section('colors',array(
        'title' =>'colors' ,
        'description' => 'Change any part of the theme colors',
        'priority' => '88' ));


//HTML color

    $wp_customize->add_setting('html_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'html_id',array(
        'label' =>'all site font default color',
        'section' => 'colors' ,
        'settings' => 'html_id' )));

//body color

    $wp_customize->add_setting('body_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'body_id',array(
        'label' =>'Background Color',
        'description' =>'Change Background Color',
        'section' => 'colors' ,
        'settings' => 'body_id' )));

//.row color
   
/*    $wp_customize->add_setting('row_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'row_id',array(
        'label' =>'Container Colors',
        'description' =>'Change Container Background Color',
        'section' => 'colors' ,
        'settings' => 'row_id' )));
*/

//page_id

    $wp_customize->add_setting('page_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_id',array(
        'label' =>'Pages & Posts Colors',
        'description' =>'Change posts and pages Background Color',
        'section' => 'colors' ,
        'settings' => 'page_id' )));



//page links [a]


// site title color
    
    $wp_customize->add_setting('site_title_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'site_title_id',array(
        'label' =>'Site Title Colors',
        'section' => 'colors' ,
        'settings' => 'site_title_id' )));



// a link color

    $wp_customize->add_setting('a_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_id',array(
        'label' =>'linls colors',
        'description' =>'all links Colors',        
        'section' => 'colors' ,
        'settings' => 'a_id' )));

// a visited color

    $wp_customize->add_setting('a_visited_id',array('default' => '#aaa' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_visited_id',array(
        'label' =>'Visited Links Colors',
        'description' =>'all visisted links Colors',        
        'section' => 'colors' ,
        'settings' => 'a_visited_id' )));


// a Hover color

    $wp_customize->add_setting('a_hover_id',array('default' => '#999' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_hover_id',array(
        'label' =>'Hover Links Colors',
        'description' =>'all links Colors',                
        'section' => 'colors' ,
        'settings' => 'a_hover_id' )));

//page_titles_id    

    $wp_customize->add_setting('page_titles_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_titles_id',array(
        'label' =>'Page Title',
        'description' =>'Change Page Title Color',        
        'section' => 'colors' ,
        'settings' => 'page_titles_id' )));

// navbar 
    // $wp_customize->add_section('section_nav_id',array(
    //     'title' =>'navigation menus' ,
    //     'description' => 'add your favorite colors and background for your navigation menu',
    //     'priority' => '1' ));

   // ul bg color 
    $wp_customize->add_setting('nav_ul_id',array('default' => '#444' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_ul_id',array(
        'label' =>'navigation background color',
        'section' => 'colors' ,
        'settings' => 'nav_ul_id' )));

    $wp_customize->add_setting('nav_a_id',array('default' => '#444' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_a_id',array(
        'label' =>'menu background color',
        'section' => 'colors' ,
        'settings' => 'nav_a_id' )));

    // na a hover
    $wp_customize->add_setting('nav_a_hover_id',array('default' => '#444' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_a_hover_id',array(
        'label' =>'menu background hover color',
        'discription'=>'change menu background color when hoer',
        'section' => 'colors' ,
        'settings' => 'nav_a_hover_id' )));

    $wp_customize->add_setting('nav_a_bg_hover_id',array('default' => '#444' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_a_bg_hover_id',array(
        'label' =>'menu background hover color',
        'discription'=>'change menu background color when hoer',
        'section' => 'colors' ,
        'settings' => 'nav_a_bg_hover_id' )));




//sidebar_titles_id


    $wp_customize->add_setting('sidebar_titles_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar_titles_id',array(
        'label' =>'Sidebar Widget Titles Colors',
        'description' =>'Change Sidebar Widget Titles Colors',                
        'section' => 'colors' ,
        'settings' => 'sidebar_titles_id' )));



}

add_action('customize_register','qwe_customize_theme');



function qwe_select_css()
{


?>


<style type="text/css">

/*****************************************
******************************************
******************************************
******************************************
*****        ***         ****       ******
*****   ********  *****  ****  ***  ******
*****   ********  *****  ****  ***  ******
*****   ********  *****  ****  ***  ******
*****   ********         ****       ******
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
*/


/* roots.css root_part_qwe */
html {
  color:<?php echo get_theme_mod('html_id','#fff'); ?>;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

p{color:<?php echo get_theme_mod('html_id','#fff'); ?>;}
h1{color:<?php echo get_theme_mod('html_id','#fff'); ?>;}
h2{color:<?php echo get_theme_mod('html_id','#fff'); ?>;}

body {
    background-color:<?php echo get_theme_mod('body_id','#222'); ?>;
    padding:0;margin:0;

 }

a:link {color:<?php echo get_theme_mod('a_id','#fff'); ?>;}
a:visited {color:<?php echo get_theme_mod('a_visited_id','#aaa'); ?>;}
a:hover {color:<?php echo get_theme_mod('a_hover_id','#999'); ?>;}

ul,li {list-style: none;padding: 0;margin: 0;}

/* essential classes */
.gap {clear:both;}
.container {background-color:<?php echo get_theme_mod('row_id','#222'); ?>;} 
.row {background-color:<?php echo get_theme_mod('row_id','#222'); ?>;}


/* header.css header_part_qwe*/
/*section.site-title a:visited {color:<?php echo get_theme_mod('site_title_visited_id','#fff'); ?>;}*/
section.site-title a {
    color:<?php echo get_theme_mod('site_title_id','#fff'); ?>;
    font-size: 120%;
    text-decoration: none;
    font-weight: bold;
    padding: 0 80px;
    text-shadow: 0px 1.1px 0 #444, 0px 1.3px 0 #444,
    0px 1.5px 0 #444,0px 1.7px 0 #444,0px 2.1px 0 #444,
     0px 2.3px 0 #444,0px 2.5px 0 #444,0px 2.7px 0 #444,
     0px 3.1px 0 #444, 0px 3.3px 0 #444,0px 3.5px 0 #444,
     0px 3.7px 0 #444,0px 4.1px 0 #444, 0px 4.3px 0 #444,
     0px 4.5px 0 #444,0px 4.7px 0 #444, 0 5px 0 #444,
     0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
}
section.site-title p  {
    font-size: 160%;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;margin: 0 10px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px #444;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;   
  
}

/**/
/*section.site-title p a:link{color:<?php echo get_theme_mod('site_title_p_a_id','#fff'); ?>;}*/

/*section.site-title a:link{color: #fff;}*/

/**/

.banner {position: relative;}

.banner img {width:90%;margin:10px 5%;
      text-shadow: 0px 7px 0 #444, 0px 6px 0 #444, 0 5px 0 #444,0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
    }


img#shadow { width:90%;margin:10px 5%;position:relative;z-index: -10;}

img#btn { width:12%;margin:10px 5%;position:absolute;left:75%;top:460px;}
img#logo {position: absolute;width:12%;margin-right:0px;margin-top: 10px;box-shadow:5px 5px 40px #000;z-index: 10;}

.circlarrow:hover {color: #ff7f00;}

/* slideshow slideshow_part_qwe */
a,.galleryThumbnil img{
transition:all 150 ms linear;
-webkit-transition:all 150 ms linear;
-moz-transition:all 150 ms linear;

}


.gallerycontainer{
    margin: 40px auto;
    /*width: 900px;*/
}

.galleryPreviewContainer {
    position: relative;
}
.galleryPreviewImage img{/*that mean all images disappear exept img.previewImage1 [Next]*/
      display: none;/* new cut*/
    width: 90%;
    position: absolute;/* new change - prev > position: relative;*/
    top:0;
    left:0;
    box-shadow: 0px 9px 0px  #444 , 0px 10px 10px #111;
    -webkit-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -webkit-border-bottom-right-radius:30px;
    -webkit-border-bottom-left-radius: 30px;
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-topright: 10px;
    -moz-border-radius-bottomright: 30px;
    -moz-border-radius-bottomleft: 30px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
}

img.previewImage1 {
    display: block;/* new cut*/
}

.desbg {}
.gallerydescription > div {
    /*display: none;*/
    margin: 0;
    padding:1% 5% 0 5%;
    background-color:rgba(0, 0, 0, 0.4);
    position: absolute;
    border-radius: 0px 0px 0px 0px;
    top:60%;
    left:5%;
    width:80%;

}

.gallerydescription > div a  {
   -webkit-text-stroke: 1px black;
   color: white;
   text-shadow:
      -1px -1px 4px #000,  
      1px -1px 4px #000,
      -1px 1px 4px #000,
       1px 1px 4px #000;
    display: block;
    font-size:100%;
    text-decoration: none;
}

.gallerydescription > div a:visited {color: #fff;}

.gallerydescription > div input {
    color: #fff;
    background-color: #222;
    border-radius: 3px;
    border:2px solid #444;
    box-shadow: 2px 2px 4px #000;
}

.gallerydescription > div input:hover {
    box-shadow: 0 0 0 #000;
    
}

.gallerydescription > div.visible {
    display: block;
}
.galleryPreviewarrow a {
    font-family: arial,sans-serif;
    /*font-size: 30px;*/
    z-index: 0;
    font-size: 200%;
    background-color:rgba(0,0,0,0.3);
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: block;
    text-align: center;
    color: #fff;
    text-decoration: none;
    border-radius: 100px;/*35px because of 70px width and height*/
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
    position: absolute;
    left:60px;
    top:160px; /* new *//* top:50%;*/

    
}

a.nextslidearrow{
    right: 60px;
    left:auto;
}

.galleryPreviewarrow a:hover {
    background-color: #000;
    /*margin-top: -40px;*/
}

.galleryNavigationBullets {
    text-align: center;
    margin:30px auto 30px auto;


}

.galleryNavigationBullets span {
    display: none;
}

.galleryNavigationBullets a {
    background-color: #ddd;
    width:20px;
    height: 20px;
    display: inline-block;
    margin-right: 5px;
    border-radius: 35px;/* new */
}

.galleryNavigationBullets a:hover ,.galleryNavigationBullets a.active {
    background-color:#555;
}


/******************************************
*******************************************
**      *********    *****            *****
**    *   *******    *****   *******  *****
**    **   ******    *****   *******  *****
**    ***   *****    *****   *******  *****
**    ****   ****    *****   *******  *****
**    *****   ***    *****            *****
**    ******   **    *****   *******  *****
**    *******   *    *****   *******  *****
**    ********       *****   *******  *****
**    *********      *****   *******  *****
**    **********     *****   *******  *****
*******************************************
*/


/* navbar.css nav_part_qwe*/
.nav div {
    margin: 0px auto ;
    padding: 0px;
    height:50px;
    width:90%;
    border-radius:2px 2px 30px 30px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;

    }

.nav div > ul {
    padding: 0 30px;
    background-color:<?php echo get_theme_mod('nav_ul_id','#444'); ?>;
    border-radius:3px 3px 30px 30px;
    height:50px;
}
.nav div a:link ,.nav div a:visited {
    color: <?php echo get_theme_mod('nav_a_color_id','#fff'); ?>;
}
.nav div a:hover {
  color:<?php echo get_theme_mod('nav_a_hover_id','#aaa'); ?>;
  background-color:<?php echo get_theme_mod('nav_a_bg_hover_id','#333'); ?>;
}

.nav div a {
    padding: 15px 15px; 
    background-color:<?php echo get_theme_mod('nav_a_id','#444'); ?>;
    border-radius:3px 3px 30px 30px;
}
.nav div > ul > li {
    margin:15px 0;
    padding: 0px 0px;
    height:50px;
    float: left;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;
}
.nav div > ul > li:nth-child(n+4)  {
    margin:25px 0 ;
    padding: 0px 5px;
    background-color:<?php echo get_theme_mod('nav_a_id','#444'); ?>;
    border-radius:3px 3px 5px 30px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;

}
.nav div > ul > li:hover:nth-child(n+4),.nav div > ul > li:hover:nth-child(n+4) a{
    background-color:<?php echo get_theme_mod('nav_a_bg_hover_id','#555'); ?>;
    border-radius:3px 3px 30px 3px;
}

.nav div > ul > li:nth-child(n+4) >a {
    padding: 0px 15px;
    background-color:<?php echo get_theme_mod('nav_a_id','#444'); ?>;
    /*border-radius:0px 0px 0px 0px;*/
}


.nav div > ul > li:nth-child(n+4) >a:hover {
    background-color:<?php echo get_theme_mod('nav_a_bg_hover_id','#555'); ?>;
    color:<?php echo get_theme_mod('nav_a_hover_id','#eee'); ?>;
}


.nav div > ul > li li {
    margin:50px 0;
    padding: 0px 0px;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;

}

.nav div ul > li > ul {
    margin:15px 0 ;
    padding: 0px 0px;
    background-color:<?php echo get_theme_mod('nav_a_id','#444'); ?>;
    position: absolute;
    left:-9999px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
}
.nav div > ul > li:hover > ul {left:auto;}
.nav div > ul > li > ul > li > ul {position:absolute;left:-9999px;}

.nav div > ul > li > ul > li:hover { }
.nav div > ul > li > ul > li:hover > a {padding: 10px 200px 10px 20px; }
.nav div > ul > li > ul > li:hover > ul {left:130px;top:auto;margin-top:-65px; }
.nav div > ul > li > ul > li > ul > li {}

/*navbar Primary */
.navbar-fixed-top{top:0;}


/*page.css page_part_qwe*/
.page .rect img {width: 100%;height: auto;}

.page .rect {
    margin:0 5px;
    padding: 0 20px;
    background-color:<?php echo get_theme_mod('page_id','#222'); ?>;
    border-bottom:1px solid <?php echo get_theme_mod('page_border_id','#fff'); ?>;
    border-radius: 15px;
}

.page div.archive{font-size: 16px;padding-left: 20px;color: #fff;text-shadow: 0px 6px 4px #000;}



.postedby {
    margin: 10px 2%;
    padding: 0 2%;
    background-color:<?php echo get_theme_mod('postedby_id','#000'); ?>;
    width:92%;
    box-shadow:inset 0px -1px 1px #777;
    display: inline-block;
}
.postedby a {margin: 10px;padding:0;float: left;}
.postedby ul {margin: 0;padding:0;}

.rect .push_button a ,.push_button a:link,.push_button a:visited {
    color: #fff;
    text-decoration: none;
}
.rect .push_button{ border-top: solid 5px #fff;}
.rect .push_button a:hover {color:#ccc;}


.rect h1 a{
       -webkit-text-stroke: 1px black;
   color:<?php echo get_theme_mod('page_titles_id','#fff'); ?>;
   text-shadow:
      -2px -2px 8px #000,  
      2px -2px 8px #000,
      -2px 2px 8px #000,
       2px 2px 8px #000;
}


/* sidebar.css sidebar_part_qwe*/

div.sidebar aside {
    margin:0 5px;
    padding: 10px 10px;
    background-color:<?php echo get_theme_mod('sidebar_id','#222'); ?>;
    box-shadow: 0px 4px 8px #000;
}
.sidebar li.widget {border-bottom:5px solid #fff;}
.sidebar .widgettitle {
    color:<?php echo get_theme_mod('sidebar_titles_id','#fff'); ?>;
   -webkit-text-stroke: 1px black;
   color: white;
   text-shadow:
      -1px -1px 4px #000,  
      1px -1px 4px #000,
      -1px 1px 4px #000,
       1px 1px 4px #000;
}
.sidebar select {color: #000;}
.sidebar input {color: #000;}
/* new 20151205 */

#searchsubmit {color: #222;}
#s {color: #222;}
/* end new 20151205 */

/****************************************************
 *  Push Button
 *****************************************************/
.push_button{
    position:relative;
    width:70%;
    color:#FFF;
    display:block;
    text-decoration:none;
    margin:0 auto;
    border-radius:5px;
    border:solid 1px #D94E3B;
    background:#cb3b27;
    text-align:center;
    padding:20px 30px;
    
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
    
    -webkit-box-shadow: 0px 9px 0px #84261a;
        -moz-box-shadow: 0px 9px 0px #84261a;
        box-shadow: 0px 9px 0px #84261a;
}


/* footer.css fopoter_part_qwe*/

section.footer1 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:<?php echo get_theme_mod('footer1_id','#222'); ?>;
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
}

section.footer1 li.widget {float: left;padding: 30px;}


section.footer2 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:<?php echo get_theme_mod('footer2_id','#222'); ?>;
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
}
section.footer2 li.widget {float: left;padding:30px;}
section.footer2 li.widget:first-child { clear: left;}
section.footer2 li.widget:last-child { clear: right;}

section.footer3 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:<?php echo get_theme_mod('footer3_id','#222'); ?>;
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
}
section.footer3 li.widget {float: left;padding: 30px;}
section.footer3 li.widget:first-child {clear:left;}


.fl-ri{float: right;}
footer img {width: 100%;height: 100px; }







/* 404 404_part_qwe*/

.oops h1 {
    color:#D94E3B;
    padding: 10px 20px;margin:10px 10px;
    box-shadow:2px 2px 4px #111;
    text-shadow:2px 2px 4px #111;
}







/* sitemap.css sitemap_part_qwe*/

.wrapper{position: relative;width: 100%;}
img.sitemap {
    position: absolute;
    z-index: 1;
    margin:0 auto;
    padding: 0;
    width: 100%;    

}
img.sitemapback {
    position: relative;
    z-index: -1;
    margin:0 auto;
    padding: 0;
    width: 100%;    

}

.maplinks table {
    z-index: 1;
    width:98%;
    position: relative;
    padding: 0px;margin: 0px auto 20px auto ;
    -webkit-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -webkit-border-bottom-right-radius:30px;
    -webkit-border-bottom-left-radius: 30px;
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-topright: 10px;
    -moz-border-radius-bottomright: 30px;
    -moz-border-radius-bottomleft: 30px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
    box-shadow: 0px 6px 0px #444,0px -3px 0px #444,0px 20px 15px #111,0px -6px 15px #111;;
}

.maplinks table tr td {width: 20%;}
.maplinks table tr {float: none;}
#gmap{position: relative;z-index: 1;}
.map {z-index: 2;}
.tabs {text-align: center;}
.tabs a {
    color:#ff0033;
    box-shadow: 2px 2px 4px #000,-2px -2px 4px #000;
    margin: 0 auto;
    padding: 2px 5px;
    text-align: center;
    text-shadow:2px 2px 4px #000;
    background-color:rgba(0,0,0,0.2); 
}
.tabs a:hover {
    box-shadow: 1px 1px 0px #000;
}
.description {}    
.description p {    
    background-color:rgba(0,0,0,0.3);

    padding: 2% 2%;
}
#portfolioID {box-shadow: 2px 2px 0px #000;border-radius: 5px;border: 2px solid #ff0033;text-align: center;color:black;}
#articlesID {box-shadow: 2px 2px 0px #000;border-radius: 5px;border: 2px solid #ff0033;text-align: center;color:black;}
#portfolioID {
    width:60%;
    display: block;
    margin-left: auto;
    margin-right: auto; }
#articlesID {
    width:60%;
    margin-left: auto;
    margin-right: auto; }




/* indicator curasul_part_qwe */

.gallerythumContainer {
    margin:1% 4% 2% 4%;
    padding: 1% 1%;
    border-radius: 20px 20px 50px 50px;
    float: left;
    width: 90%;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
}

.galleryThumbnil img {
    margin:10px 2%;
    padding: 2% 2%;
    border-radius: 20px 20px 50px 50px;
    width:92%;
    float: left;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
     }
.thumbwrapper{float: left;width: 33%;}





/*****************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
******************************************
*/

/* media.css media_part_qwe */

/* media_part_lte_768__qwe */

@media (max-width: 768px){

.gallerythumContainer {
        margin:0px 1%;
    padding: 1% 1%;
    border-radius: 0px 0px 0px 0px;
    float: left;
    
      -moz-box-shadow: 0 0 0 #000000;
   -webkit-box-shadow: 0 0 0 #000000;
   box-shadow:0 0 0 #000000 ;
    border: 0px solid #666;
}

    .thumbwrapper {
    margin:0px 1%;
    padding: 1% 1%;
    border-radius: 20px 20px 50px 50px;
    float: left;
    width:45%;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
     }

}

/* media_part_lte_500__qwe */

@media (max-width: 500px){
    .thumbwrapper {
    margin:10px 1%;
    padding: 1% 1%;
    border-radius: 20px 20px 50px 50px;
    width:92%;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
     }

}
.gallerythumContainer input {
    margin-left: 4%;
    /*margin-bottom: 0;*/
           -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:0 5px 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
    color: #fff;
    text-align: center;
    background-color: #222;
    width:30%;
    height: 25px;
    border-radius: 10px;
}
.des p{
    margin:0px 4%;
    padding: 0% 2%;
    
}


/* media_part_lte_992__qwe */

@media (max-width: 992px){
.galleryPreviewarrow a {width: 60px;height: 60px;line-height: 60px;top:110px;}
.gallerydescription > div{top:55%;}
.gallerydescription > div a{font-size:80%;line-height: 15px;text-decoration: none;}
.gallerydescription > div input{font-size:80%;}

}

/* media_part_lte_768__qwe */


@media (max-width: 750px){
.galleryPreviewarrow a {width: 50px;height: 50px;line-height: 50px;top:95px;}
.gallerydescription > div{top:53%;}
.gallerydescription > div a{font-size:75%;line-height: 14px;text-decoration: none;}
.gallerydescription > div input{font-size:70%;margin-top: 0;}
section.site-title p {font-size: 100%; }/*section.site-title p a {font-size: 100%; }*/
section.site-title a {font-size: 100%;padding: 0 10px;}
}


@media (max-width: 640px){
.galleryPreviewarrow a {width: 50px;height: 50px;line-height: 50px;top:95px;}
.gallerydescription > div{top:45%;}
.gallerydescription > div a{font-size:80%;line-height: 14px;text-decoration: none;}
.gallerydescription > div input{font-size:70%; display: none;}
section.site-title p {font-size: 100%; } /*section.site-title p a {font-size: 100%; }*/ 
section.site-title a {font-size: 100%;padding: 0 10px;}
}

@media (max-width: 500px){
section.site-title p {font-size: 80%;}
section.site-title a {font-size: 80%;padding: 0 10px;}
.galleryPreviewarrow a {top:40px;font-size: 80%;width: 40px;height: 40px;line-height: 40px;}
.galleryPreviewarrow a:hover {top:60px;}
.gallerydescription > div{top:40%;}
.gallerydescription > div a{font-size:70%;line-height: 10px;text-decoration: none;}
.gallerydescription > div input{font-size:60%;display: none;}
.galleryNavigationBullets a{width: 15px;height: 15px;}

.nav {}
.cut {display: none;}   

}

@media (max-width: 340px){
section.site-title p {font-size: 70%;}
section.site-title a {font-size: 70%;padding: 0 10px;text-shadow:0 0 0;}
.galleryNavigationBullets a{width: 10px;height: 10px;text-shadow:0 0 0;}

.gallerydescription > div {
    /*display: none;*/
    margin: 0;
    padding:0 5% 0 5%;
    background-color:rgba(0, 0, 0, 0.4);
    position: absolute;
    border-radius: 0px 0px 30px 30px;
    top:40%;
    left:5%;
    width:80%;

}

.gallerydescription > div a  {display: block;font-size:70%;text-decoration: none;}
.gallerydescription > div input{font-size:60%;display: none;}

}


/* media_part_lte_1200__qwe */


@media (max-width: 1200px){

}


/* media_part_lte_500__qwe */


@media (max-width: 747px){
.page h1 {margin-top:60px;}

/* navbar.css*/
.nav div {
    margin: 0px auto ;
    padding: 0px;
    width: 30%; 
position: absolute;

    }

.nav div > ul {
    padding: 0;
    background-color:<?php echo get_theme_mod('nav_ul_id','#444'); ?>;
    border-radius:3px 3px 30px 30px;
    width: 100%;
}
.nav div > ul:hover li{display: block;margin-top: 0;}


.nav div > ul > li:first-child{
display: inline-block;
}

.nav div a {
    padding: 0px 15px; 
    background-color:<?php echo get_theme_mod('nav_a_id','#444'); ?>;;
}
.nav div > ul > li {
    margin: 0;
    padding: 0px 0px;
    background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;
    height:50px;
    width: 100%;
    float: left;

    display: none;

    border-radius:3px 3px 30px 5px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;

}

.nav div > ul > li >a {
    padding: 0px 15px;
    background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;
}
.nav div > ul > li:nth-child(n+4)  {
    margin: 0;
    padding: 0px 5px;
    background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;
    border-radius:3px 3px 5px 30px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;

}
.nav div > ul > li:nth-child(n+4) >a {
    padding: 0px 15px;
    background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;
}

.nav div > ul > li >li {
    margin:0px 0;
    padding: 0px 0px;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;

}

.nav div ul > li > ul {
    margin:0px 0 ;
    padding: 0px 0px;
    background-color:<?php echo get_theme_mod('nav_ul_li_ul_id','#444'); ?>;
    position: absolute;
    left:-9999px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
}
.nav div > ul > li:hover > ul {left:30%;}
.nav div > ul > li > ul > li > ul {position:absolute;left:-9999px;}

.nav div > ul > li > ul > li:hover {}
.nav div > ul > li > ul > li:hover > a {padding: 0px 200px 10px 20px; }
.nav div > ul > li > ul > li:hover > ul {left:130px;top:auto;margin-top:-65px; }
.nav div > ul > li > ul > li > ul > li {}

}

/* custome_part_qwe */

.box_shadow_qwe{box-shadow:1px 1px 12px #000;}
.box_shadow_qwe a:hover{box-shadow:0px 0px 0px #000,0px 0px 0px #000;}

    </style>
    <?php
}

add_action('wp_head','qwe_select_css' );

?>