<div class="slider-area-wrapper fix">
     <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider-01"
          data-source="gallery">
         <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.4.7">
             <ul>
                 <!-- SLIDE 01 -->
                 @php $x = 1; $y = 2; @endphp
                 @forelse ($sliders as  $slider)
                
                 <li data-index="rs-{{$x}}" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                     data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                     data-thumb="{{asset('images/'.$slider->image)}}" data-rotate="0"
                     data-saveperformance="off" data-title="Slide">
                     <!-- MAIN IMAGE -->
                     <img src="{{asset('images/'.$slider->image)}}" alt="slider" data-bgposition="center center"
                          data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                          data-no-retina>
                     <!-- LAYERS -->
 
                     <!-- LAYER NR. 2 -->
                     <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="['{{$slider->align}}','{{$slider->align}}','{{$slider->align}}','{{$slider->align}}']"
                          data-hoffset="['10','50','10','15']" data-y="['middle','middle','middle','middle']"
                          data-voffset="['-60','-60','-90','-76']" data-width="100%" data-height="none"
                          data-whitespace="wrap" data-type="text" data-responsive_offset="on"
                          data-frames='[{"delay":150,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                          data-textAlign="['{{$slider->align}}','{{$slider->align}}','{{$slider->align}}','{{$slider->align}}']" data-paddingtop="[0,0,0,0]"
                          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                         
                     </div>
 
                     <!-- LAYER NR. 3 -->
                     <h1 class="tp-caption   tp-resizeme" id="slide-1-layer-3" data-x="['{{$slider->align}}','{{$slider->align}}','{{$slider->align}}','{{$slider->align}}']"
                         data-hoffset="['10','50','10','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['0','0','-30','-30']" data-fontsize="['70','70','70','40']"
                         data-lineheight="['70','70','70','40']" data-width="100%" data-height="none"
                         data-whitespace="wrap" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":50,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                         data-textAlign="['{{$slider->align}}','{{$slider->align}}','{{$slider->align}}','{{$slider->align}}']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                         <span style="color:#fff; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;" > {!! $slider->title !!} </span></h1>
 
                     <!-- LAYER NR. 4 -->
                     <div class="tp-caption   tp-resizeme" id="slide-1-layer-4" data-x="['{{$slider->align}}','{{$slider->align}}','{{$slider->align}}','{{$slider->align}}']"
                          data-hoffset="['10','50','10','15']" data-y="['middle','middle','middle','middle']"
                          data-voffset="['61','61','31','14']" data-width="100%" data-height="none"
                          data-whitespace="rap" data-type="text" data-responsive_offset="on"
                          data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                          data-textAlign="['{{$slider->align}}','{{$slider->align}}','{{$slider->align}}','{{$slider->align}}']" data-paddingtop="[0,0,0,0]"
                          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                        {{-- <span style="color:#fff">{!! $slider->content !!}</span>  --}}
                        <span style="color:#fff; font-size:24px;  text-shadow: -1px -1px 0 #424141, 1px -1px 0 #3a3939, -1px 1px 0 #464545, 1px 1px 0 #3b3939;" > {!! $slider->content !!}</span> 
                     </div>
 
                     <!-- LAYER NR. 5 -->
                     <div class="tp-caption bttn-primary-bg rev-btn  tp-resizeme  transit-md" id="slide-{{$x}}-layer-{{$y+6}} "
                          data-x="['{{$slider->align}}','center','{{$slider->align}}','{{$slider->align}}']" data-hoffset="['11','-378','11','16']"
                          data-y="['top','top','middle','middle']" data-voffset="['392','391','89','75']"
                          data-fontsize="['15','16','16','16']" data-fontweight="['700','600','600','600']"
                          data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                          data-responsive_offset="on"
                          data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(250,154,0,1);bg:transparent;bw:2 2 2 2;"}]'
                          data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                          data-paddingright="[25,25,25,25]" data-paddingbottom="[15,15,15,15]">
                        <a href="{{$slider->links}}" style="color:#fff" class="btn btn-primary"> Learn More</a> 
                     </div>
                 </li>
                
                 @php  
                    $x = $x + 1;
                 @endphp
                 @empty
                 @endforelse
             </ul>
             <div class="tp-bannertimer"></div>
         </div>
     </div>
 </div>
 