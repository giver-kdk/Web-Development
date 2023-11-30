AJAX doesn't do reload...it fetches data very quick(For eg: Search engine search recommendation)...
user doesn't know about the request being sent...it is fast....
Eg: In login page to send login-data, auto text complete, rating and voting, user post update in their profile

To enable AJAX in Chrome: 
- Paste: --disable-web-security --user-data-dir="C:/ChromeDevSession"


The AJAX 'readyState' object has 5 states: 
- 0 (UNSENT)

- 1 (OPENED)

- 2 (HEADERS_RECEIVED)

- 3 (LOADING)

- 4 (DONE)