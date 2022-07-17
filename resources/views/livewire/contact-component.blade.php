<div>
<section class="heading-link">
    <h3>contact us</h3>
    <p> <a href="/">home</a> / contact </p>
 </section>

 <!-- contact section starts  -->

 <section class="contact">

   <h1 class="heading"> Get In Touch</h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours :</h3>
         <p>9:000am to 7:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone :</h3>
         @if ($settings)
            <p> {{$settings->phone}}</p>
            <p> {{$settings->phone2}}</p>
         @else
            <p> +8801934453979</p>
            <p> +8801965501219</p>
         @endif
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> email : </h3>
         @if ($settings)
         <p> {{$settings->email}}</p>
      @else
         <p>info@kaizenitbd.com</p>
      @endif
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address :</h3>
         @if ($settings)
         <p> {{$settings->address}}</p>
      @else
        <p>151/6, 2nd floor, Gazi Tower, Panthapath Dhaka-1205</p>
      @endif
      </div>

   </div>
   <div class="row">

      <div class="image">
         <img src="{{asset('assets/images/contact-img.png')}}" alt="">
      </div>

      <form   wire:submit.prevent="ContactUs">
         @if (Session::has('message'))
           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
         @endif
         <h3>send us a message</h3>
         <input type="text" placeholder="name" class="box"  wire:model="name">
         @error('name') <span class="text-danger">{{$message}}</span> @enderror
         <input type="text" placeholder="email" class="box" wire:model="email">
         @error('email') <span class="text-danger">{{$message}}</span> @enderror
         <input type="text" placeholder="phone" class="box" wire:model="phone">
         @error('phone') <span class="text-danger">{{$message}}</span> @enderror
         <textarea class="box" placeholder="message" wire:model="comment" id="" cols="30" rows="10"></textarea>
         @error('comment') <span class="text-danger">{{$message}}</span> @enderror
         <input type="submit" class="btn" value="Submit" >
      </form>
   
   </div>
   

</section>

 <!-- contact section ends -->

 <!-- faq section starts  -->

 <section class="faq">

    <h1 class="heading">frequently asked questions</h1>

    <div class="accordion-container">

       <div class="accordion active">
          <div class="accordion-heading">
             <h3>how to contact for help?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>what is the best career in 2022?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>how much fees for web development?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>can I choose my own tutor?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>what payment methods are availabe?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>can I have free trial for a month?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
          </p>
       </div>

    </div>

 </section>

 <!-- faq section ends -->

 <!-- logo slider starts  -->

{{-- our parteners  --}}

<section class="logo-container">
   <h1 class="heading"> OUR PARTNERS</h1>
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         @foreach ($partners as $partner)
            <div class="swiper-slide"> <img src="{{asset('assets/images/Partner')}}/{{$partner->image}}" alt="" class="partner"> </div>
         @endforeach
         
      </div>
   </div>
</section>

</div>