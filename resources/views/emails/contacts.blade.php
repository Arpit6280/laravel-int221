@component('mail::message')


<p style="color:blue">
Hii {{$details['name']}} <br></p>

<p style="color:black">
Thank You for contacting <span style="color:red"> SMART SHOPPING </span> you initiated request regarding {{$details['message']}}
We will reply you through mail as soon as possible
 </p>

 <p style="color:blue">
Thanks & Regards,<br>
SMART SHOPPING
</p>


@endcomponent
