<x-mail::message>
# NH Nepali Dictionary

Dear {!! $user->name !!},

Thank you for registering with NH Nepali Dictionary. To ensure the security of your account, please verify your email address and proceed to set your password.

<x-mail::button :url="$url">
Verify and Set Password
</x-mail::button>

If you did not register for an account with NH Nepali Dictionary, please disregard this email.

Best regards,<br>
NH Nepali Dictionary
</x-mail::message>
