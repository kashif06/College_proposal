@component('mail::message')
<div class="custom">
  <h1>Big Equation Technologies Pvt ltd</h1>
<h3>To,</h3>
  <h3>The {{$user->address_to}},</h3>
  <h3>{{$user->college_name}},</h3>
  <h3>{{$user->college_address}}</h3>
  <h3>Subject: {{$user->subject}}</h3><br>
  <h3>Repected Sir/Mam,</h3>
  <p>I take this opportunity to introduce myself, This is Nikhil Nevrekar, Manager of Big Equation Technologies Pvt ltd,
     Lower Parel, Mumbai. As a part of our continuous strives to bring the top companies to the college premises,
     We would like to request you to consider the possibilities of conducting your recruitment drive for
     B.Tech ( CS/IT ), MBA, MCA. We want to join hands with your esteemed organization
     and help our students to achieve a better career in your company.
   </p>
   <p>
     We offer Engineering Programs at the Undergraduate level and Management Programs at both undergraduate and postgraduate level.
   </p>
   <p>Please feel welcome to revert to us in case you require any additional information regarding our Group.</p>
   <p>We earnestly hope to have your visit in our campus for your talent requirements this year..</p>

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->
<br>
<h3>Thanks & Regards,<br></h3>
<!-- {{ config('app.name') }} -->
<h3>Big Equation Technologies Pvt ltd</h3>
<h3>Nikhil Nevrekar</h3>
<h3>Email: nikhil@bigequations.com</h3>
<h3>Contact No: 8045961399</h3>
<div>
@endcomponent
