<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'flash' => [
        'welcome' => 'Welcome to Posta Studio.',
        'welcome_trial' => 'Welcome to Posta Studio. Your trial has started.',
    ],

    'legal' => 'By continuing, you agree to our <a href="https://trypost.it/terms" target="_blank">Terms of Service</a> and <a href="https://trypost.it/privacy" target="_blank">Privacy Policy</a>.',

    'slides' => [
        'calendar' => [
            'title' => 'Plan the work',
            'description' => 'See every post, channel, and publish date in one calendar. Drag to reschedule without leaving the workspace.',
        ],
        'scheduling' => [
            'title' => 'Publish from one place',
            'description' => 'Schedule content across LinkedIn, X, Instagram, TikTok, YouTube, and more from one workspace.',
        ],
        'media' => [
            'title' => 'Keep creative close',
            'description' => 'Publish images, carousels, stories, and reels with the right format for each supported network.',
        ],
        'video' => [
            'title' => 'Video for every feed',
            'description' => 'Upload once and publish to TikTok, YouTube Shorts, Instagram Reels, and Facebook Reels.',
        ],
        'team' => [
            'title' => 'One workspace per brand',
            'description' => 'Invite your team, assign roles, and keep each client or brand in its own workspace.',
        ],
        'signatures' => [
            'title' => 'Reuse what works',
            'description' => 'Save hashtags, links, and signoffs once, then add them to posts when you need them.',
        ],
    ],

    'or_continue_with' => 'Or continue with',
    'or_continue_with_email' => 'Or continue with email',
    'google_login' => 'Log in with Google',
    'google_signup' => 'Sign up with Google',
    'github_login' => 'Log in with GitHub',
    'github_signup' => 'Sign up with GitHub',
    'github_email_unavailable' => 'Unable to retrieve your email from GitHub. Make your GitHub email public or grant the email scope, then try again.',

    'login' => [
        'title' => 'Welcome back',
        'description' => 'Pick up where your content team left off.',
        'page_title' => 'Log in',
        'email' => 'Email address',
        'password' => 'Password',
        'show_password' => 'Show password',
        'hide_password' => 'Hide password',
        'forgot_password' => 'Forgot password?',
        'remember_me' => 'Remember me',
        'submit' => 'Log in',
        'no_account' => "Don't have an account?",
        'sign_up' => 'Sign up',
    ],

    'register' => [
        'title' => 'Run the work behind every post',
        'description' => 'Plan, publish, collaborate, and automate social content from one workspace.',
        'page_title' => 'Register',
        'signup_with_email' => 'Sign up with email',
        'name' => 'Name',
        'name_placeholder' => 'Full name',
        'email' => 'Email address',
        'password' => 'Password',
        'show_password' => 'Show password',
        'hide_password' => 'Hide password',
        'submit' => 'Create account',
        'has_account' => 'Already have an account?',
        'log_in' => 'Log in',
    ],

    'forgot_password' => [
        'title' => 'Forgot password',
        'description' => 'Enter your email to receive a password reset link',
        'page_title' => 'Forgot password',
        'email' => 'Email address',
        'submit' => 'Email password reset link',
        'return_to' => 'Or, return to',
        'log_in' => 'log in',
    ],

    'reset_password' => [
        'title' => 'Reset password',
        'description' => 'Please enter your new password below',
        'page_title' => 'Reset password',
        'email' => 'Email',
        'password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'confirm_placeholder' => 'Confirm password',
        'submit' => 'Reset password',
    ],

    'verify_email' => [
        'title' => 'Verify email',
        'description' => 'Please verify your email address by clicking on the link we just emailed to you.',
        'page_title' => 'Email verification',
        'link_sent' => 'A new verification link has been sent to the email address you provided during registration.',
        'resend' => 'Resend verification email',
        'log_out' => 'Log out',
    ],

    'accept_invite' => [
        'page_title' => 'Accept Invite',
        'title' => "You've been invited!",
        'description' => "You've been invited to join the :workspace workspace.",
        'workspace' => 'Workspace',
        'your_role' => 'Your role',
        'email' => 'Email',
        'accept' => 'Accept Invite',
        'decline' => 'Decline Invite',
        'login_prompt' => 'Log in or create an account to accept this invite.',
        'log_in' => 'Log in',
        'create_account' => 'Create Account',
        'expired_title' => 'This invite is no longer valid',
        'expired_description' => 'The workspace for this invite was deleted. Ask the account owner for a new invite if you still need access.',
        'expired_action' => 'Go to home',
    ],

];
