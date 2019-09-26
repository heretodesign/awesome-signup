@component('mail::message')
# The wait is Over & this will make you Happy!!


Thank you for enrolling for the special group signups discount at Amboss. Click the link below to proceed to register for your entire group.
Use the Promo Code "PlanD-50-For-50"

@component('mail::button', ['url' => 'http://127.0.0.1:8000/dynamic-field'])
Enrollment Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent 
 