

<div class="slider-area-wrapper">
     <div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider-05"
          data-source="gallery">
         <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" data-version="5.4.7">
             <ul>
                 <!-- SLIDE  -->
                 @forelse ($sliders as  $slider)
                 <li data-index="rs-13" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                     data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                     data-thumb="{{asset('images/'.$slider->image)}}" data-rotate="0" data-saveperformance="off"
                     data-title="Slide">
                     <!-- MAIN IMAGE -->
                     <img src="{{asset('images/'.$slider->image)}}" alt="" data-bgposition="center center"
                          data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                          data-no-retina>
                     <!-- LAYERS -->
 
                     <!-- LAYER NR. 1 -->
                     <div class="tp-caption tp-resizeme" id="slide-13-layer-10"
                          data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                          data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-50','-58']"
                          data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                          data-responsive_offset="on"
                          data-frames='[{"from":"y:-50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                          data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                          data-paddingleft="[0,0,0,0]"></div>
 
                     <!-- LAYER NR. 2 -->
                     <div class="tp-caption cap-big-white   tp-resizeme" id="slide-13-layer-11"
                          data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                          data-y="['middle','middle','middle','middle']" data-voffset="['-100','-120','-100','-100']"
                          data-fontsize="['80','80','60','45']" data-lineheight="['90','90','60','45']"
                          data-width="['none','none','none','400']" data-height="none"
                          data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                          data-responsive_offset="on"
                          data-frames='[{"from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                          data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                         {{$slider->title}}
                     </div>
 
                     <!-- LAYER NR. 3 -->
                     <div class="tp-caption   tp-resizeme" id="slide-13-layer-12"
                          data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                          data-y="['middle','middle','middle','middle']" data-voffset="['-10','-20','0','0']"
                          data-width="['670','670','600','320']" data-height="none" data-whitespace="normal"
                          data-type="text" data-responsive_offset="on"
                          data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);"}]'
                          data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                          {{$slider->content}}
                     </div>
 
                     
 
                     <!-- LAYER NR. 5 -->
                     {{-- <div class="tp-caption bttn-primary-bg rev-btn  tp-resizeme  transit-md" id="slide-13-layer-15"
                          data-x="['center','center','center','center']" data-hoffset="['-80','-80','-80','-80']"
                          data-y="['middle','middle','middle','middle']" data-voffset="['90',90','100','100']"
                          data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                          data-responsive_offset="on"
                          data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":200,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(250,154,0,1);bg:transparent;bw:2px 2px 2px 2px;"}]'
                          data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                          data-paddingright="[25,25,25,25]" data-paddingbottom="[15,15,15,15]"
                          data-paddingleft="[25,25,25,25]">Learn More
                     </div> --}}
                 </li>
                       
                 @empty
                     
                 @endforelse
 
               
             </ul>
             {{-- <div class="tp-bannertimer"></div> --}}
         </div>
     </div>
 </div>