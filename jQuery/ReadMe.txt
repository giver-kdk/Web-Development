********** jQuery **********
- Simplifies JS code 
- Allows easy animation
- Need to link thisscript URL in HTML code to use jQuery: 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
- Popup message and confirmation message is easy
- Page loading is easy 
- Always start with $ in jQuery
- jQuery Selectors is $("CSS_Selector"): 
    1. var elem = $("#myID");           // Select id
    2. var elems = $("#myID, p");       // Select multiple elements
    3. var elem = $("*");               // Select all elements
    4. var elem = $("p");               // Select tag element
    5. var elem = $(".myClass");        // Select class element
    6. var elem = $("p.intro");         // Select intro class of paragraph
    7. var elem = $("tr.even");         // Select even row of table row
    8. var elem = $(".age").val()       // Select value of input box

- Animation functions: 
    - show(speed, callback)             // callback is a function that runs after show operation
    - hide(speed, callback)
    - toggle(speed, callback)
    - fadeIn()
    - fadeOut()
    - fadeToggle()
    - fadeTo()
    - slideDown()
    - slideUp()
    - slideToggle()
    - animate({...properties})
    - stop()

Style in jQuery:
    - CSS exactly like CSS stylesheet
    - elem.css("background-color", "red")



