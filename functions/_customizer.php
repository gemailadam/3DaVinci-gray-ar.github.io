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


// Panal container


$wp_customize->add_panel( 'panel_id', array(
 'priority'       => 10,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => 'Theme Options',
  'description'    => 'Change all Your Theme Colors',
) );


// slideshow

    

    $wp_customize->add_section('slideshow',array(
        'title' =>'Slide Show' ,
        'description' => 'Upload your slideshow images , with 400 pixel exact height',
        'priority' => '1' ,
        'panel'=> 'panel_id',
        ));

    // }





//   logo

        $qwe_image=get_template_directory_uri();
        $qwe_logo=$qwe_image . '/images/logo.png';
    

        // $qwe_image=get_bloginfo('template_directory');
        // $qwe_logo=$qwe_image . '/images/logo.png';

        $wp_customize->add_setting('logo_id',array('default' => $qwe_logo ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_id',array(
            'label' =>'Upload Logo Image',
            'description'=>'add logo image [ for best performance add png image type with transperent background]',
            'priority'=>1,
            'section' => 'slideshow' ,
            'settings' => 'logo_id' )));

// slide 1

        $wp_customize->add_setting('image1_id',array('default' => $qwe_image . '/images/image1.jpg' ));
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

        $wp_customize->add_setting('image2_id', array('default' => $qwe_image . '/images/image2.jpg' ));
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
                        
        $wp_customize->add_setting('image3_id',array('default' => $qwe_image . '/images/image3.jpg'));
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

        $wp_customize->add_setting('image4_id',array('default' => $qwe_image . '/images/image4.jpg'));
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

        $wp_customize->add_setting('image5_id',array('default' => $qwe_image . '/images/image5.jpg' ));
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

        $wp_customize->add_setting('image6_id',array('default' => $qwe_image . '/images/image6.jpg'));
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


        $wp_customize->add_setting('image7_id',array('default' => $qwe_image . '/images/image7.jpg'));
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


        $wp_customize->add_setting('image8_id',array('default' => $qwe_image . '/images/image8.jpg' ));
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





/*
*********************************************************************************************
**            *********               ******         *******    *****   ********         ****
**   ************************   ***************   **********    ****   ************   *******
**   ************************   ***************   **********    ***   *************   *******
**   ************************   ***************   **********    **   **************   *******
**   ************************   ***************   **********    *   ***************   *******
**            ***************   ***************   **********     ******************   *******
***********   ***************   ***************   **********    *   ***************   *******
***********   ***************   ***************   **********    **   **************   *******
***********   ***************   ***************   **********    ***   *************   *******
***********   ***************   ***************   **********    ****   ************   *******
**            ***************   ************          ******    *****   ********          ***
*********************************************************************************************
*/

//indicators   indicator_image1_id


 //   if ($qwe_dir=='ltr'){

    $wp_customize->add_section('sticky',array(
        'title' =>'Three Sticky Images' ,
        'description' => 'To Change Sticky Images and there descriptions and buttons titles you must use 3 indicator Template First',
        'priority' => '3' ,
        'panel'=> 'panel_id',
 ));



//1
        $wp_customize->add_setting('indicator_image1_id',array('default' => $qwe_image . '/images/image1.jpg'));
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

        $wp_customize->add_setting('indicator_image2_id',array('default' => $qwe_image . '/images/image2.jpg'));
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

        $wp_customize->add_setting('indicator_image3_id',array('default' => $qwe_image . '/images/image3.jpg'));
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


// language direction 



$wp_customize->add_section('rtl_id', array('title' => 'language direction' ,'panel'=> 'panel_id',)); 
$wp_customize->add_setting(
    'qwe-rtl',
    array(
        'default' => 'ltr',
    )
);
 
$wp_customize->add_control(
    'qwe-rtl',
    array(
        'type' => 'select',
        'label' => 'change language direction',
        'section' => 'rtl_id',
        'priority'=>499 ,
        'transport' => 'postMessage',
        'choices' => array(
            'ltr' => 'ltr',
            'rtl' => 'rtl',
            
        ),
    )
);



        $qwe_imagewww=get_template_directory_uri();
        $qwe_logowww=$qwe_imagewww . '/images/blur4.png';

        $wp_customize->add_setting('footerwww',array('default' => $qwe_logowww));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footerwww',array(
            'label' =>'Upload Footer Image',         
            'priority'=>51,
            'section' => 'sticky' ,
            'settings' => 'footerwww' )));



// $qwe_strang="url('".$qwe_logowww."');";

//         array('logowww' =>$qwe_logowww , );
//         $logowww="https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/blur4.png";
//  
   


/* _slideshow.php end*/
 


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


    $wp_customize->add_section('colors',array(
        'title' =>'colors' ,
        'description' => 'Change any part of the theme color',
        'priority' => '88' ,
        'panel'  => 'panel_id',
        ));


//HTML color

    // $wp_customize->add_setting('html_id',array('default' => '#fff' ));

    // $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'html_id',array(
    //     'label' =>'all site font default color',
    //     'section' => 'colors' ,
    //     'settings' => 'html_id' )));

//body color

    $wp_customize->add_setting('body_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'body_id',array(
        'label' =>'Background Color',
        // 'description' =>'Change Background Color',
        'section' => 'colors' ,
        'settings' => 'body_id' )));


// container_id


    $wp_customize->add_setting('container_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'container_id',array(
        'label' =>'Container Background Color',
        // 'description' =>'Change Container Background Color',
        'section' => 'colors' ,
        'settings' => 'container_id' )));


//container shadow 
// $wp_customize->add_section('colors', array('title' => 'language direction' ,'panel'=> 'panel_id',)); 
$wp_customize->add_setting(
    'shadow_id',
    array(
        'default' => '',
    )
);
 
$wp_customize->add_control(
    'shadow_id',
    array(
        'type' => 'radio',
        'label' => 'change language direction',
        'section' => 'colors',
        'priority'=>499 ,
        'transport' => 'postMessage',
        'choices' => array(
            '#000' => 'enable',
            '' => 'disable',
            
        ),
    )
);




//page_id

    $wp_customize->add_setting('page_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_id',array(
        'label' =>'Pages & Posts Background Colors',
        // 'description' =>'Change posts and pages Background Color',
        'section' => 'colors' ,
        'settings' => 'page_id' )));


//postedby_id

    $wp_customize->add_setting('postedby_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'postedby_id',array(
        'label' =>'Posts footer tail',
        'description' =>'Change posts tails [ that contain Posted By and Date of Post ] Background Color',
        'section' => 'colors' ,
        'settings' => 'postedby_id' )));


//sidebar_id background


    $wp_customize->add_setting('sidebar_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar_id',array(
        'label' =>'Sidebar Background Colors',
        // 'description' =>'Change Sidebar Background Colors',                
        'section' => 'colors' ,
        'settings' => 'sidebar_id' )));


// footer background footer_id
    $wp_customize->add_setting('footer_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_id',array(
        'label' =>'Footers background Colors',
        // 'description' =>'Change Footers Background Colors',                
        'section' => 'colors' ,
        'settings' => 'footer_id' )));



// bullets background bullets_id
    $wp_customize->add_setting('bullets_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'bullets_id',array(
        'label' =>'bullets Colors',
        // 'description' =>'Change Footers Background Colors',                
        'section' => 'colors' ,
        'settings' => 'bullets_id' )));


// bullets background bullets_active_id
    $wp_customize->add_setting('bullets_active_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'bullets_active_id',array(
        'label' =>'bullets active Colors',
        // 'description' =>'Change Footers Background Colors',                
        'section' => 'colors' ,
        'settings' => 'bullets_active_id' )));



// button background button_id
    $wp_customize->add_setting('button_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'button_id',array(
        'label' =>'buttons Colors',
        // 'description' =>'Change Footers Background Colors',                
        'section' => 'colors' ,
        'settings' => 'button_id' )));



// button text button_txt_id
    $wp_customize->add_setting('button_txt_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'button_txt_id',array(
        'label' =>'buttons text Color',
        // 'description' =>'Change Footers Background Colors',                
        'section' => 'colors' ,
        'settings' => 'button_txt_id' )));


//page links [a]


// site title color
    
    $wp_customize->add_setting('site_title_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'site_title_id',array(
        'label' =>'Site Title Colors',
        'section' => 'colors' ,
        'settings' => 'site_title_id' )));




// site description color
    
    $wp_customize->add_setting('site_description_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'site_description_id',array(
        'label' =>'Site Description Colors',
        'section' => 'colors' ,
        'settings' => 'site_description_id' )));


    $wp_customize->add_setting('page_titles_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_titles_id',array(
        'label' =>'Page Title',
        'description' =>'Change Page Title Color',        
        'section' => 'colors' ,
        'settings' => 'page_titles_id' )));


// posted by text color
    $wp_customize->add_setting('postedby_txt_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'postedby_txt_id',array(
        'label' =>'Post Tails Texts',
        'description' =>'Change Posted By Texts Color',        
        'section' => 'colors' ,
        'settings' => 'postedby_txt_id' )));



// sidebar_txt_id color


    $wp_customize->add_setting('sidebar_widget_txt_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar_widget_txt_id',array(
        'label' =>'Sidebar Widget text color',
        // 'description' =>'Change Page Title Color',        
        'section' => 'colors' ,
        'settings' => 'sidebar_widget_txt_id' )));

    $wp_customize->add_setting('sidebar_titles_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar_titles_id',array(
        'label' =>'Sidebar Titles Colors',
        'description' =>'',        
        'section' => 'colors' ,
        'settings' => 'sidebar_titles_id' )));


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// navbar //////////////////////////////////////////////////////////////////////////////////////////////////////

   // nav bg color 
    $wp_customize->add_setting('nav_bg_id',array('default' => '#444' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_bg_id',array(
        'label' =>'menu background color',
        'section' => 'colors' ,
        'settings' => 'nav_bg_id' )));

    // nav text color
    $wp_customize->add_setting('nav_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_id',array(
        'label' =>'menu text link color',
        'section' => 'colors' ,
        'settings' => 'nav_id' )));

    // nav a hover
    $wp_customize->add_setting('nav_hover_id',array('default' => '#ddd' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_hover_id',array(
        'label' =>'menu text hover color',
        'section' => 'colors' ,
        'settings' => 'nav_hover_id' )));



// 404 oops color


    $wp_customize->add_setting('404_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'404_id',array(
        'label' =>'404 Redirected',
        'description' =>'Wrong Page That any user Search from any search engine like google ',        
        'section' => 'colors' ,
        'settings' => '404_id' )));



// using jquery real time color customization


$wp_customize->get_setting( 'body_id' )->transport = 'postMessage';
$wp_customize->get_setting( 'container_id' )->transport = 'postMessage';
$wp_customize->get_setting( 'page_id' )->transport = 'postMessage';
$wp_customize->get_setting( 'postedby_id' )->transport = 'postMessage';
$wp_customize->get_setting( 'sidebar_id' )->transport = 'postMessage';
$wp_customize->get_setting( 'footer_id' )->transport = 'postMessage';

/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
// public static function mytheme_customizer_live_preview()
function mytheme_customizer_live_preview()
{
    wp_enqueue_script( 
          'mytheme-themecustomizer',            //Give the script an ID
          get_template_directory_uri().'/js/theme-customizer.js',//Point to file
          array( 'jquery','customize-preview' ),    //Define dependencies
          '',                       //Define a version (optional) 
          true                      //Put script in footer?
    );
}
add_action( 'customize_preview_init', 'mytheme_customizer_live_preview' );






// enable disble footer image 


    $wp_customize->add_section('footer_img_id',array(
        'title' =>'disable footer image' ,
        // 'description' => 'disable end footer image',
        'priority' => '88' ,
        'panel'  => 'panel_id',
        ));


$wp_customize->add_setting('disable_id',array('default' => ''));


 // 'enable' => 'initial',
 
$wp_customize->add_control(
    'disable_id',
    array(
        'type' => 'select',
        'label' => 'disable footer image',
        'section' => 'footer_img_id',
        'priority'=>499 ,
        'transport' => 'postMessage',
        'default'=>'',
        'choices' => array(
            'block' => 'enable',
            'none' => 'disable',
            
        ),
    )
);




}
add_action('customize_register','qwe_slideshow' );






function qwe_select_css()
{


?>

<style type="text/css">



/*background-color*/
/*background-color*/
/*background-color*/
/*background-color*/
/*background-color*/

/*main background change*/

body {background-color:<?php echo get_theme_mod('body_id','#222'); ?>;}/*#00ffffff*/

/*change row_id to container_id*/

.container .contain{
    background-color:<?php echo get_theme_mod('container_id','#222'); ?>;
    box-shadow: 3px 3px 8px <?php echo get_theme_mod('shadow_id',''); ?> , -3px -3px 8px <?php echo get_theme_mod('shadow_id',''); ?>;
    border-radius: 10px;
} 

/*page*/

.page .rect {
    background-color:<?php echo get_theme_mod('page_id','#222'); ?>;
    border-bottom:1px solid <?php echo get_theme_mod('page_border_id','#fff'); ?>;
}

.page .postedby {background-color:<?php echo get_theme_mod('postedby_id','#000'); ?>;
    
    box-shadow:inset 0px -1px 1px #777;
}



/*sidebar*/

div.sidebar aside {background-color:<?php echo get_theme_mod('sidebar_id','#222'); ?>;}



/* footer */
/*change foter1_id foter2_id foter3_id to footer_id*/
section.footer1 {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}
section.footer2 {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}
section.footer3 {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}

section.footer1-rtl {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}
section.footer2-rtl {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}
section.footer3-rtl {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}



/* 3 indicators */
/* add */
.gallerythumContainer input {background-color:<?php echo get_theme_mod('3indicators_id','#222'); ?>;}



/* end main background change*/


/*
.galleryPreviewarrow a {background-color:rgba(0,0,0,0.3);}

.galleryPreviewarrow a:hover {background-color: #000;}

.gallerydescription .desbg{background-color:rgba(0, 0, 0, 0.4);}
*/

/*add button_id color */
.gallerydescription > div input {background: <?php echo get_theme_mod('button_id','#222'); ?>;}

/*add bullets_id color */
.galleryNavigationBullets a {background: <?php echo get_theme_mod('bullets_id','#222'); ?>;}

/*add bullets_active_id color */

.galleryNavigationBullets a.active ,.galleryNavigationBullets a:hover {
    background-color:<?php echo get_theme_mod('bullets_active_id','#fff'); ?>;;
}

/*.gallerydescription_static .desbg{background-color:rgba(0, 0, 0, 0.4);}*/

.gallerydescription_static > div input {<?php echo get_theme_mod('button_id','#222'); ?>;}

/*add upper widget banner bg if used */
section.qwe-banner {<?php echo get_theme_mod('widjet_id','#222'); ?>;}


/*
***********************
**     **********   ***
**      *********   ***
**   *   ********   ***
**   **   *******   ***
**   ***   ******   ***
**   ****   *****   ***
**   *****   ****   ***
**   ******   ***   ***
**   *******   **   ***
**   ********   *   ***
**   *********      ***
***********************
*/

/* nav background colors*/

/*
.qwe-nav > nav > div > ul > li:nth-child(odd)  {background-color:orange;}
.qwe-nav > nav > div > ul > li:nth-child(even) {background-color:white; }*/
.qwe-nav > nav > div > ul > li > a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav > nav > div > ul > li > ul {background-color:transparent; }
.qwe-nav > nav > div > ul > li > ul  li {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav > nav > div > ul > li > ul  li  a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}

/*
.qwe-nav-rtl > nav > div > ul > li:nth-child(odd)  {background-color:orange;}
.qwe-nav-rtl > nav > div > ul > li:nth-child(even) {background-color:white; }*/
.qwe-nav-rtl > nav > div > ul > li > a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav-rtl > nav > div > ul > li > ul {background-color:transparent; }
.qwe-nav-rtl > nav > div > ul > li > ul  li {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav-rtl > nav > div > ul > li > ul  li  a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}


/* 3 indicator button bg*/
.gallerythumContainer input {background:<?php echo get_theme_mod('button_id','#222')?>;}

.gallerydescription > div input {background:<?php echo get_theme_mod('button_id','#222'); ?>;}

.gallerydescription_static > div input {background:<?php echo get_theme_mod('button_id','#222'); ?>;}





/*@media (max-width: 768px){

}
*/
/* media_part_lte_500__qwe */

/*@media (max-width: 500px){


}

*/

/*text color*/
/*text color*/
/*text color*/
/*text color*/
/*text color*/

/* all links color */

a {color:#fff;/*<?php echo get_theme_mod('a_id','#fff'); ?>;*/}
a:visited {color:#aaa;/*<?php echo get_theme_mod('a_visited_id','#aaa'); ?>;*/}
a:hover {color:#999;/*<?php echo get_theme_mod('a_hover_id','#999'); ?>;*/}

html {
  color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

p{color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/}
h1{color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/}
h2{color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/}



/* site title color*/

section.site-title p a {color:<?php echo get_theme_mod('site_title_id','#fff'); ?>;}
section.site-title p {color:<?php echo get_theme_mod('site_title_id','#fff'); ?>;}

/* site description color*/
section .title-description a {color:<?php echo get_theme_mod('site_description_id','#fff'); ?>;}

/* slideshow description and button colors*/

.gallerydescription > div a {color:<?php echo get_theme_mod('slide_id','#fff'); ?>;}

.gallerydescription > div input {color:<?php echo get_theme_mod('button_txt_id','#fff'); ?>;}

.gallerydescription_static > div a {color:<?php echo get_theme_mod('slide_id','#fff'); ?>;}

.gallerydescription_static > div input {color:<?php echo get_theme_mod('button_txt_id','#fff'); ?>;}

.gallerythumContainer input {background:<?php echo get_theme_mod('button_txt_id','#222')?>;}


/*
***********************
**     **********   ***
**      *********   ***
**   *   ********   ***
**   **   *******   ***
**   ***   ******   ***
**   ****   *****   ***
**   *****   ****   ***
**   ******   ***   ***
**   *******   **   ***
**   ********   *   ***
**   *********      ***
***********************
*/

.qwe-nav li a {color:<?php echo get_theme_mod('nav_id','#fff');?>;}
.qwe-nav li a:hover {color:<?php echo get_theme_mod('nav_hover_id','#ddd');?>;}
/*.qwe-nav li a:visited {<?php echo get_theme_mod('nav_visited_id','#aaa');?>;} */

.qwe-nav-rtl li a {color:<?php echo get_theme_mod('nav_id','#fff');?>;}
.qwe-nav-rtl li a:hover {color:<?php echo get_theme_mod('nav_hover_id','#ddd');?>}
/*.qwe-nav-rtl li a:visited {<?php echo get_theme_mod('nav_visited_id','#aaa');?>;} */


/* 3 indicators */

/*sticky indicator 3 images*/


.gallerythumContainer input {color:<?php echo get_theme_mod('button_id','#fff');?>;}




/*page*/


.page div.archive {color: #fff;}

.page .rect .push_button a {color: #fff;}

.page .rect .push_button a:hover {color:#ccc;}


.page .rect h1 a{color:<?php echo get_theme_mod('page_titles_id','#fff'); ?>;}

.postedby li , a , span {color:<?php echo get_theme_mod('postedby_txt_id','#fff'); ?>;}
/****************************************************
 *  Push Button
 *****************************************************/
.push_button{
    color:#FFF;
    border-radius:5px;
    border:solid 1px #D94E3B;
    background:#cb3b27;
  
    -webkit-box-shadow: 0px 9px 0px #84261a;
        -moz-box-shadow: 0px 9px 0px #84261a;
        box-shadow: 0px 9px 0px #84261a;
}
/*****************************************************/


/*sidebar*/

.sidebar a {color:<?php echo get_theme_mod('sidebar_widget_txt_id','#fff'); ?>;}
/*.sidebar h2 {color:<?php echo get_theme_mod('sidebar_widget_txt_id','#fff'); ?>;}*/
.sidebar span {color:<?php echo get_theme_mod('sidebar_widget_txt_id','#fff'); ?>;}
.sidebar li {color:<?php echo get_theme_mod('sidebar_widget_txt_id','#fff'); ?>;}
.sidebar li.widget {border-bottom:5px solid #fff;}
.sidebar .widgettitle {color:<?php echo get_theme_mod('sidebar_titles_id','#fff'); ?>;}

/*important components appear at widget >> search and find more */
.sidebar select {color: #000;}
.sidebar input {color: #000;}
.sidebar #searchsubmit {color: #222;}
.sidebar #s {color: #222;}



/* ooopppsss */
.oops h1 {color:<?php echo get_theme_mod('404_id','#D94E3B;'); ?>;}


.footer3-rtl {position: relative;clear:both;
}
.footer-img {
    /*background:<?php printf($qwe_strang); ?> */
    background:url("<?php echo get_theme_mod('footerwww','') ?>"); 
    /*background:<?php printf('url(" %s ")',$qwe_logowww); ?>*//* "https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/blur4.png");/*<?php echo $footerimg; ?>;*/

    background-size: cover, cover;
    width:100%;
    height: 100px;
    display: <?php echo get_theme_mod('disable_id','') ?>;
}   

/********************************************************************************************************/
/*******************************    css only less code important   **************************************/
/********************************************************************************************************/
/********************************************************************************************************/

/*
********************
****             ***
****   ********  ***
****   ********  ***
****   ********  ***
****   **        ***
****   **    *******
****   ***    ******
****   ****    *****
****   *****    ****
****   ******    ***
****   *******    **
********************
*/



/* root */

body {margin: 0;padding: 0;}

a:link {color:#fff;/*<?php echo get_theme_mod('a_id','#fff'); ?>;*/}
a:visited {color:#aaa;/*<?php echo get_theme_mod('a_visited_id','#aaa'); ?>;*/}
a:hover {color:#999;/*<?php echo get_theme_mod('a_hover_id','#999'); ?>;*/}

html {
  color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

p {color:#fff;}
h1{color:#fff;}
h2{color:#fff;}

.container {}
.contain {}

/*
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
*/

/* header */
.title-description {margin-left: 5%;margin-right: 5%;}

section .title-description a:before { content: open-quote; }
section .title-description a:after { content: close-quote; }
section .title-description a {
    font-size: 1.5em;
    text-decoration: none;
    font-weight: bold;
    padding: 0 ;
    text-shadow: 0px 1.1px 0 #444, 0px 1.3px 0 #444,
    0px 1.5px 0 #444,0px 1.7px 0 #444,0px 2.1px 0 #444,
     0px 2.3px 0 #444,0px 2.5px 0 #444,0px 2.7px 0 #444,
     0px 3.1px 0 #444, 0px 3.3px 0 #444,0px 3.5px 0 #444,
     0px 3.7px 0 #444,0px 4.1px 0 #444, 0px 4.3px 0 #444,
     0px 4.5px 0 #444,0px 4.7px 0 #444, 0 5px 0 #444,
     0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444,
     4px 4px 12px #000 ;
}
section.site-title p:first-letter {font-size: 1.5em;}
section.site-title p {
    
    font-size: 2em;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;margin: 0 10px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px #444;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;   

      text-shadow: 0px 1.1px 0 #444, 0px 1.3px 0 #444,
    0px 1.5px 0 #444,0px 1.7px 0 #444,0px 2.1px 0 #444,
     0px 2.3px 0 #444,0px 2.5px 0 #444,0px 2.7px 0 #444,
     0px 3.1px 0 #444, 0px 3.3px 0 #444,0px 3.5px 0 #444,
     0px 3.7px 0 #444,0px 4.1px 0 #444, 0px 4.3px 0 #444,
     0px 4.5px 0 #444,0px 4.7px 0 #444, 0 5px 0 #444,
     0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444
     ,4px 4px 10px #000;
}



/*
********************
**            ******
**   ***************
**   ***************
**   ***************
**   ***************
**            ******
***********   ******
***********   ******
***********   ******
***********   ******
**            ******
********************
*/


/* slideshow */

.banner{position: relative;}

.galleryPreviewContainer {
    position: relative;
}
.galleryPreviewImage img{/*that mean all images disappear exept img.previewImage1 [Next]*/
    display: none;
    width: 90%;
    position: absolute;/* new change - prev > position: relative;*/
    top:0;
    right: 5%;
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

.galleryPreviewImage img.previewImage1 {
    display: block;
}

img#shadow { width:90%;margin:10px 5%;position:relative;z-index: -10;}

img#btn { width:12%;margin:10px 5%;position:absolute;left:75%;top:460px;}
img#logo {position: absolute;width:12%;left:5%;box-shadow:5px 5px 40px #000;z-index: 10;}


.galleryPreviewarrow{width: 90%}
.galleryPreviewarrow a {
    font-family: arial,sans-serif;
    /*font-size: 30px;*/
    /*z-index: 0;*/
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
}

.previousslidearrow{
    /*right: 60px;*/
    left:5%;
  margin-top: 15%;

}

.nextslidearrow {
    right:5%;
    margin-top: 15%;
}


.galleryPreviewarrow a:hover {
    background-color: #000;
    /*margin-top: -40px;*/
}

.gallerydescription > div {
    display: none;
    position:absolute;
    width: 90%;
    right:5%;
    margin-top:25%;
    padding:1% 0%;
    border-radius: 0px 0px 0px 0px;

}

/*///////////////////////////////////////////////////////////////////////////////////////////////////*/
.gallerydescription > div a {color: #fff;text-decoration: none;}
.gallerydescription .description1 {display: block;}

.gallerydescription .desbg{background-color:rgba(0, 0, 0, 0.4);padding:1% 0;}

.gallerydescription > div input {
    margin-right: 5%;
    margin-left: 5%;
    border-radius: 3px;
    border:2px solid #444;
    box-shadow: 2px 2px 4px #000;

}

.gallerydescription > div input:hover {
    box-shadow: 0 0 0 #000;
    
}


.galleryNavigationBullets {
    width: 100%;
    position: absolute;
    text-align: center;
    margin-top:35%;
    

}

.galleryNavigationBullets span {
    display: none;
}


.galleryNavigationBullets a {
    box-shadow:inset 3px 3px 8px #000;
    width:20px;
    height: 20px;
    display: inline-block;
    margin-right: 5px;
    border-radius: 35px;/* new */
}

.galleryNavigationBullets a:hover ,.galleryNavigationBullets a.active {
    box-shadow: 3px 3px 8px #000;
}

/*for static image page template*/

.galleryPreviewImage_static img{/*that mean all images disappear exept img.previewImage1 [Next]*/
    width: 90%;
    position: absolute;/* new change - prev > position: relative;*/
    top:0;
    right: 5%;
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

.gallerydescription_static > div {

    position:absolute;
    width: 90%;
    right:5%;
    margin-top:25%;
    padding:1% 0%;
    border-radius: 0px 0px 0px 0px;

}

/*//////////////////////////////////////////////////////////////////////////////////////////*/
.gallerydescription_static > div a {color: #fff;text-decoration: none;}
.gallerydescription_static .description1 {display: block;}

.gallerydescription_static .desbg{background-color:rgba(0, 0, 0, 0.4);padding:1% 0;}

.gallerydescription_static > div input {
    margin-right: 5%;
    margin-left: 5%;
    border-radius: 3px;
    border:2px solid #444;
    box-shadow: 2px 2px 4px #000;

}

.gallerydescription_static > div input:hover {
    box-shadow: 0 0 0 #000;
    
}


/*strange module place*/
.qwe-banner img {width: 100%;height: 100px; }

.qwe-banner ul, .qwe-banner li {list-style: none;padding: 0;margin: 0;}/* search for any problem may appear in future */

/*/////////////////////////////////////////////////////////////////////////////////////*/
section.qwe-banner {
    margin:1% 2%;
    padding: 0px;
    background-color:#222;/*<?php echo get_theme_mod('footer1_id','#222'); ?>;*/
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
}

section.qwe-banner li.widget {float: left;padding: 30px;}
section.qwe-banner li.widget:first-child { clear: left;}
section.qwe-banner li.widget:last-child { clear: right;}





/*
***********************
**     **********   ***
**      *********   ***
**   *   ********   ***
**   **   *******   ***
**   ***   ******   ***
**   ****   *****   ***
**   *****   ****   ***
**   ******   ***   ***
**   *******   **   ***
**   ********   *   ***
**   *********      ***
***********************
*/

/* nav */

/*use customizer.php to change from english to arabic and from arabic to english for navbare and others*/

/*common in all levels*/
.qwe-nav > nav > div > ul {
  margin-top:0; margin-right:5%;margin-left:5%;float: none;width:90%;/*background-color: #333;*/

}

.qwe-nav > nav > div > ul  li  {list-style: none;}

.qwe-nav li:nth-child(odd) {padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav li:nth-child(even){padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav li a {padding: 10px 15px;float: none;width:auto;white-space:nowrap; }

.qwe-nav li a {}
.qwe-nav li a:hover {}
.qwe-nav li a:visited {} 

.qwe-nav > nav > div > ul > li li {position: relative;}

/*.qwe-nav > nav > div > ul > li:nth-child(10) {float: none;}*/


/*0 level*/
.qwe-nav > nav > div > ul > li {float:left;}
.qwe-nav > nav > div > ul > li:nth-child(odd)  {background-color:orange;border-radius: 0 0 0 20px; }
.qwe-nav > nav > div > ul > li:nth-child(odd) > a {border-radius: 0 0 0 20px; }
.qwe-nav > nav > div > ul > li:nth-child(even) {/*float:left;*/background-color:white;border-radius: 0 0 20px 0; }
.qwe-nav > nav > div > ul > li:nth-child(even) > a{border-radius: 0 0 20px 0 ; }
/*.qwe-nav > nav > div > ul > li:first-child > a {border-radius: 0 0 0 20px;}*/
/*.qwe-nav > nav > div > ul > li:last-child > a  {border-radius: 0 0 20px 0;}*/
.qwe-nav > nav > div > ul > li > a {border-radius: 0 0 20px 0;background-color:#444;}
.qwe-nav > nav > div > ul > li > a {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}

/* 1st level */
/*display:none problem is the next step to show menu because i will use display:block and that make problems */
.qwe-nav > nav > div > ul > li >       ul {margin: 0;padding: 0;position: absolute;right:-9999px;background-color:transparent; }
.qwe-nav > nav > div > ul > li:hover > ul {right:auto;}/* :nth-child(odd) */
.qwe-nav > nav > div > ul > li >       ul  > li     {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav > nav > div > ul > li >       ul  > li     {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li >       ul  > li > a {background-color:#444;}



/* 2nd level */
.qwe-nav > nav > div > ul > li > ul > li>        ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav > nav > div > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li >       ul > li > a {background-color:#444;}


/* 3rd level */
.qwe-nav > nav > div > ul > li > ul > li > ul > li >       ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li >       ul > li > a {background-color:#444;}

/*4th level*/
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li >       ul {display:inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li >       ul > li > a {background-color:#444;}


/*5th level*/
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul > li > a {background-color:#444;}



/*6th level*/
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

/*7th level*/
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

/*8th level*/
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}


/*9th level*/
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}


/*10th level*/
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}


/*nav media*/

@media (max-width: 747px){

.qwe-nav > nav {position: relative;}
.qwe-nav > nav > div > ul {
  margin-top:0; margin-right:5%;margin-left:5%;float: none;width:90%;/*background-color: #333;*/
position: absolute;width:150px;

}

.qwe-nav > nav > div > ul  li  {list-style: none;}

.qwe-nav li:nth-child(odd) {padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav li:nth-child(even){padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav li a {padding: 10px 15px;float: none;width:auto;white-space:nowrap; }
.qwe-nav li  { }
.qwe-nav > nav > div > ul > li li {/*position: relative;*/}

/*.qwe-nav > nav > div > ul > li:nth-child(10) {float: none;}*/


/*0 level*/
.qwe-nav > nav > div > ul > li {display: none;}
.qwe-nav > nav > div > ul > li:first-child {display:block;}
.qwe-nav > nav > div > ul:hover:first-child > li {display: block;}

.qwe-nav > nav > div > ul {display: inline-block;}
.qwe-nav > nav > div > ul > li {float:none;}
.qwe-nav > nav > div > ul > li:nth-child(odd)  {float:none;background: transparent; border-radius: 0 0 0 20px; }
.qwe-nav > nav > div > ul > li:nth-child(odd) > a {border-radius: 0 0 0 20px; border-top:1px solid orange;}
.qwe-nav > nav > div > ul > li:nth-child(even) {float:none;background: transparent;border-radius: 0 0 20px 0; }
.qwe-nav > nav > div > ul > li:nth-child(even) > a{border-radius: 0 0 20px 0 ; border-top:1px solid white;}
.qwe-nav > nav > div > ul > li > a {border-radius: 0 0 20px 0;background-color:#444;}
.qwe-nav > nav > div > ul > li > a {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}


/* 1st level */
/*display:none problem is the next step to show menu because i will use display:block and that make problems */
.qwe-nav > nav > div > ul > li >       ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;background-color:transparent; }
.qwe-nav > nav > div > ul > li:hover > ul {right:auto;}/* :nth-child(odd) */
.qwe-nav > nav > div > ul > li >       ul  > li     {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav > nav > div > ul > li >       ul  > li     {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav > nav > div > ul > li >       ul  > li > a {background-color:#444;}


}


/*arabic nav */

/*common in all levels*/
.qwe-nav-rtl > nav > div > ul {
  margin-top:0; margin-right:5%;margin-left:5%;float: none;width:90%;/*background-color: #333;*/

}

.qwe-nav-rtl > nav > div > ul  li  {list-style: none;}

.qwe-nav-rtl li:nth-child(odd) {padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav-rtl li:nth-child(even){padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav-rtl li a {padding: 10px 15px;float: none;width:auto;white-space:nowrap; }

.qwe-nav-rtl li a {}
.qwe-nav-rtl li a:hover {}
.qwe-nav-rtl li a:visited {} 


.qwe-nav-rtl > nav > div > ul > li li {position: relative;}

/*.qwe-nav > nav > div > ul > li:nth-child(10) {float: none;}*/


/*0 level*/
.qwe-nav-rtl > nav > div > ul > li {float:right;}
.qwe-nav-rtl > nav > div > ul > li:nth-child(odd)  {/*float:left;*/background-color:orange;border-radius: 0 0 0 20px; }
.qwe-nav-rtl > nav > div > ul > li:nth-child(odd) > a {border-radius: 0 0 0 20px; }
.qwe-nav-rtl > nav > div > ul > li:nth-child(even) {/*float:left;*/background-color:white;border-radius: 0 0 20px 0; }
.qwe-nav-rtl > nav > div > ul > li:nth-child(even) > a{border-radius: 0 0 20px 0 ; }
.qwe-nav-rtl > nav > div > ul > li > a {border-radius: 0 0 20px 0;background-color:#444;}
.qwe-nav-rtl > nav > div > ul > li > a {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}

/* 1st level */
/*display:none problem is the next step to show menu because i will use display:block and that make problems */
.qwe-nav-rtl > nav > div > ul > li >       ul {margin: 0;padding: 0;position: absolute;right:-9999px;background-color:transparent; }
.qwe-nav-rtl > nav > div > ul > li:hover > ul {right:auto;}/* :nth-child(odd) */
.qwe-nav-rtl > nav > div > ul > li >       ul  > li     {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav-rtl > nav > div > ul > li >       ul  > li     {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li >       ul  > li > a {background-color:#444;}



/* 2nd level */
.qwe-nav-rtl > nav > div > ul > li > ul > li>        ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav-rtl > nav > div > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li >       ul > li > a {background-color:#444;}


/* 3rd level */
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li >       ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li >       ul > li > a {background-color:#444;}

/*4th level*/
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li >       ul {display:inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li >       ul > li > a {background-color:#444;}


/*5th level*/
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li >       ul > li > a {background-color:#444;}



/*6th level*/
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

/*7th level*/
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

/*8th level*/
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}


/*9th level*/
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}


/*10th level*/
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li:hover > ul {right:auto;top:-15px;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {margin: 0;padding: 0;background-color:#444;border-top:solid 1px white;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

/*arabic nav*/

@media (max-width: 747px){

.qwe-nav-rtl > nav {position: relative;}
.qwe-nav-rtl > nav > div > ul {
  margin-top:0; margin-right:5%;margin-left:5%;float: none;width:90%;/*background-color: #333;*/
position: absolute;width:150px;

}

.qwe-nav-rtl > nav > div > ul  li  {list-style: none;}

.qwe-nav-rtl li:nth-child(odd) {padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav-rtl li:nth-child(even){padding:11px 0 10px 0;margin-top: 15px;}

.qwe-nav-rtl li a {padding: 10px 15px;float: none;width:auto;white-space:nowrap; }
.qwe-nav-rtl li  { }
.qwe-nav-rtl > nav > div > ul > li li {/*position: relative;*/}

/*.qwe-nav > nav > div > ul > li:nth-child(10) {float: none;}*/


/*0 level*/
.qwe-nav-rtl > nav > div > ul > li {display: none;}
.qwe-nav-rtl > nav > div > ul > li:first-child {display:block;}
.qwe-nav-rtl > nav > div > ul:hover:first-child > li {display: block;}

.qwe-nav-rtl > nav > div > ul {display: inline-block;}
.qwe-nav-rtl > nav > div > ul > li {float:none;}
.qwe-nav-rtl > nav > div > ul > li:nth-child(odd)  {float:none;background: transparent; border-radius: 0 0 0 20px; }
.qwe-nav-rtl > nav > div > ul > li:nth-child(odd) > a {border-radius: 0 0 0 20px; border-top:1px solid orange;}
.qwe-nav-rtl > nav > div > ul > li:nth-child(even) {float:none;background: transparent;border-radius: 0 0 20px 0; }
.qwe-nav-rtl > nav > div > ul > li:nth-child(even) > a{border-radius: 0 0 20px 0 ; border-top:1px solid white;}
.qwe-nav-rtl > nav > div > ul > li > a {border-radius: 0 0 20px 0;background-color:#444;}
.qwe-nav-rtl > nav > div > ul > li > a {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}


/* 1st level */
/*display:none problem is the next step to show menu because i will use display:block and that make problems */
.qwe-nav-rtl > nav > div > ul > li >       ul {display: inline-block;margin: 0;padding: 0;position: absolute;right:-9999px;background-color:transparent; }
.qwe-nav-rtl > nav > div > ul > li:hover > ul {right:auto;}/* :nth-child(odd) */
.qwe-nav-rtl > nav > div > ul > li >       ul  > li     {margin: 0;padding: 0;background-color:#444;border-top:solid 1px orange;}
.qwe-nav-rtl > nav > div > ul > li >       ul  > li     {border-bottom:solid 1px #fff;box-shadow: 0px 6px 0px #444,0px 20px 15px #111;}
.qwe-nav-rtl > nav > div > ul > li >       ul  > li > a {background-color:#444;}


/**************************************************/
/**************************************************/
}



/*sticky indicator 3 images*/

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



.gallerythumContainer input {
    margin-left: 4%;
    /*margin-bottom: 0;*/
           -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:0 5px 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
    text-align: center;
    width:30%;
    height: 25px;
    border-radius: 10px;
}
.des p{
    margin:0px 4%;
    padding: 0% 2%;
    
}

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




/*main*/

/*add col-........ to main for more stable work*/


/*page*/

/*Very Important for images , to not exceed page width [ Wordpress test ]*/

.page .rect img {max-width:100%;height:auto;overflow: auto;}
.page .rect iframe {max-width:100%;overflow: auto;}
.page .rect div {max-width:100%;overflow: auto;}

.page {margin-top: 50px;}

.page .rect {
    max-width: 94%;
    margin:0 1%;
    padding: 0 1%;
    border-bottom:1px solid #fff;/*<?php echo get_theme_mod('page_border_id','#fff'); ?>;*/
    border-radius: 15px;
    width: 94%;
display:block;float: left;
}

.page .rect .qwe-page-title {  
     text-shadow:
          -1px -1px 4px #000,  
          1px -1px 4px #000,
          -1px 1px 4px #000,
           1px 1px 4px #000;
}

.page .postedby {
    margin: 10px 2%;
    padding: 0 2%;
    width:92%;
    box-shadow:inset 0px -1px 1px #777;
    display: inline-block;
}
.page .postedby a {margin: 1%;padding:0;float: left;text-decoration: none;}
.page .postedby ul {margin: 0;padding:0;list-style: none;}
.page .postedby li {list-style: none;}

.page .rect .push_button a {color: #fff;text-decoration: none;}

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
/*****************************************************/


.qwe-next-post {float: right;}

.qwe-prev-post {}


/* Comments */
.qwe-comments{padding: 2%;}
.qwe-comments #comments {
         text-shadow:
          -1px -1px 4px #000,  
          1px -1px 4px #000,
          -1px 1px 4px #000,
           1px 1px 4px #000;
}
.qwe-comments #respond {
         text-shadow:
          -1px -1px 4px #000,  
          1px -1px 4px #000,
          -1px 1px 4px #000,
           1px 1px 4px #000;
}

/*.qwe-comments ul {box-shadow:inset 2px 2px 6px #000;padding: 1% 3%;list-style: none;}*/
.qwe-comments li {list-style: none;}
.qwe-comments li:nth-child(odd) {padding:2%;border-radius:0 0 4% 4%;margin:1%; border-bottom: 5px solid #fff; background:#333;border-left:1px solid orange ;}
.qwe-comments li:nth-child(even) {padding: 2%;border-radius:0 0 4% 4%;margin:1%;  border-bottom: 5px solid #fff; background:#555;border-left:1px solid orange ;}


/* new class with qwe_ prefix because problems with wordpress class and others like jquery css */
#commentform textarea {padding: 10px;color: #222; width:80%;border:4px solid #ff7f00; border-radius:20px 0px 20px 0;float:none;display: block;margin: 0px;}
#commentform label {font-size: 140%; margin: 20px ;box-shadow: 5px 5px 8px #000;float: none;padding:5px 20px;}
#commentform input {box-shadow: 5px 5px 8px #000;color: #000;margin: 20px ;}
#reply-title {text-shadow: 5px 5px 8px #000;}

#commentform span.required {

    color:red;
    text-shadow:
          -1px -1px 4px #000,  
          1px -1px 4px #000,
          -1px 1px 4px #000,
           1px 1px 4px #000;
}

.comment-form-author label {display: inline-block;width:20%;}
.comment-form-author input {display: inline-block;width:50%;}

.comment-form-email label {display: inline-block;width:20%;}
.comment-form-email input {display: inline-block;width:50%;}

.comment-form-url label {display: inline-block;width:21%;}
.comment-form-url input {display: inline-block;width:50%;}


.comment p {padding: 3%;
     text-shadow:
          -1px -1px 4px #000,  
          1px -1px 4px #000,
          -1px 1px 4px #000,
           1px 1px 4px #000;
box-shadow: 0px 1px 1px #000,0px -1px 1px #000;
} 

/*sidebar*/

.sidebar >div {margin-top: 50px;}

.sidebar ul,.sidebar li {list-style: none;padding: 0;margin: 0;}/* search for any problem may appear in future */


.sidebar aside {
    margin:0 1%;
    padding: 3% 3%;
    box-shadow: 0px 4px 8px #000;
}

.sidebar li.widget {padding-bottom:1%;border-bottom:5px solid #fff;}
.sidebar .widgettitle {
   -webkit-text-stroke: 1px black;
   text-shadow:
      -1px -1px 4px #000,  
      1px -1px 4px #000,
      -1px 1px 4px #000,
       1px 1px 4px #000;
}

/*important components appear at widget >> search and find more */
.sidebar select {color: #000;}
.sidebar input {color: #000;}
.sidebar #searchsubmit {color: #222;}
.sidebar #s {color: #222;}


/* float sidebar*/
.sidebar3 {position: absolute;right: -160px;}
.sidebar3 .col-width{width:200px}
.sidebar3 li {list-style: none;}
.sidebar3 .subside {width: 15%;float: left;margin:auto auto;height: 100%;padding: 20px 0;background-color: transparent;}
.sidebar3 .subside p{box-shadow: -3px 3px 8px #000; text-align: center; font-size: 2em;background-color:#dd3333; color: white;line-height: 40px;float: none;border-radius: 10px 0 0 10px;}
.sidebar3 .side {display: none; float: left;width: 79%;padding: 3%;background-color: #222;height: 100%;box-shadow: -3px 3px 8px #000;border-radius: 10px 0 0 10px;}
.sidebar3:hover .side{display: block;}
.sidebar3:hover {right: 0px;}

.sidebar3-fixed-top-0{top:0;}
.sidebar3-fixed-top{top:0;}
.sidebar3-fixed-top2{top:300px;}
.sidebar3-fixed-top3{top:600px;}

/*footer*/
/*important if any one add any image element to any footer widget >> support search and find others element that can be add */
footer img {width: 100%;height: 100px; }

footer ul, footer li {list-style: none;padding: 0;margin: 0;}/* search for any problem may appear in future */
section.footer1 {
    margin:1% 2%;
    padding: 0px;
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
}

section.footer1 li.widget {float: left;padding: 30px;}


section.footer2 {
    margin:1% 2%;
    padding: 0px;
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
}
section.footer2 li.widget {float: left;padding:30px;}
section.footer2 li.widget:first-child { clear: left;}
section.footer2 li.widget:last-child { clear: right;}

section.footer3 {
    margin:1% 2%;
    padding: 0px;
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
}
section.footer3 li.widget {float: left;padding: 30px;}
section.footer3 li.widget:first-child {clear:left;}


/*arabic footer*/

section.footer1-rtl {
    margin:1% 2%;
    padding: 0px;
    width:96%;
    float: right;
    box-shadow: 0px 4px 8px #000;
}

section.footer1-rtl li.widget {float: right;padding: 30px;}


section.footer2-rtl {
    margin:1% 2%;
    padding: 0px;
    width:96%;
    float: right;
    box-shadow: 0px 4px 8px #000;
}
section.footer2-rtl li.widget {float: right;padding:30px;}
section.footer2-rtl li.widget:first-child { clear: left;}
section.footer2-rtl li.widget:last-child { clear: right;}

section.footer3-rtl {
    margin:1% 2%;
    padding: 0px;
    width:96%;
    float: right;
    box-shadow: 0px 4px 8px #000;
}
section.footer3-rtl li.widget {float: right;padding: 30px;}
section.footer3-rtl li.widget:first-child {clear:left;}


.oops h1 {
    color:#D94E3B;
}

</style>    

    <?php
  
}

add_action('wp_head','qwe_select_css' );



?>