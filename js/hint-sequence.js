var enjoyhint_instance = new EnjoyHint({});

var enjoyhit_script_steps = [
    {
        'next .navbar-brand': 'Welcome to Turbo Search! Let me guide you through its features.',
        'nextButton': {className: "myNext", text: "Sure"},
        'skipButton': {className: "mySkip", text: "Nope!"}
    },
    {
        'key #mySearchButton': "Type in your search request and press 'Enter'",
        'keyCode': 13,
    },
    {
        'click .btn': 'This button allows you to switch between the search results'
    },
    {
        'next .about': 'Check the list of all features available',
        'shape': 'circle'
    },
    {
        'next .contact': 'Your feedback will be appreciated.',
        'shape': 'circle',
        'radius': 70,
        'showSkip': false,
        'nextButton': {className: "myNext", text: "Got it!"}
    }
];

enjoyhint_instance.set(enjoyhit_script_steps);
enjoyhint_instance.run();