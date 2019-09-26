@component('mail::message')
# The wait is Over & this will make you Happy!!


Thank you for enrolling for the special group signups discount at Amboss. Click the link below to proceed to register for your entire group.
Use the Promo Code "PlanA-10-For-10"

@component('mail::button', ['url' => 'http://127.0.0.1:8000/dynamic-field'])
Enrollment Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent 
 