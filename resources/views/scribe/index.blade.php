<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel- API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
        body .content .bash-example code {
            display: none;
        }

        body .content .javascript-example code {
            display: none;
        }
    </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

    <a href="#" id="nav-button">
        <span>
            MENU
            <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
        </span>
    </a>
    <div class="tocify-wrapper">

        <div class="lang-selector">
            <button type="button" class="lang-button" data-language-name="bash">bash</button>
            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
        </div>

        <div class="search">
            <input type="text" class="search" id="input-search" placeholder="Search">
        </div>

        <div id="toc">
            <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
            </ul>
            <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
            </ul>
            <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="endpoints-POSToauth-token">
                        <a href="#endpoints-POSToauth-token">Authorize a client to access the user's account.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GEToauth-authorize">
                        <a href="#endpoints-GEToauth-authorize">Authorize a client to access the user's account.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSToauth-token-refresh">
                        <a href="#endpoints-POSToauth-token-refresh">Get a fresh transient token cookie for the
                            authenticated user.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSToauth-authorize">
                        <a href="#endpoints-POSToauth-authorize">Approve the authorization request.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-DELETEoauth-authorize">
                        <a href="#endpoints-DELETEoauth-authorize">Deny the authorization request.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GEToauth-tokens">
                        <a href="#endpoints-GEToauth-tokens">Get all of the authorized tokens for the authenticated
                            user.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-DELETEoauth-tokens--token_id-">
                        <a href="#endpoints-DELETEoauth-tokens--token_id-">Delete the given token.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GEToauth-clients">
                        <a href="#endpoints-GEToauth-clients">Get all of the clients for the authenticated user.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSToauth-clients">
                        <a href="#endpoints-POSToauth-clients">Store a new client.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-PUToauth-clients--client_id-">
                        <a href="#endpoints-PUToauth-clients--client_id-">Update the given client.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-DELETEoauth-clients--client_id-">
                        <a href="#endpoints-DELETEoauth-clients--client_id-">Delete the given client.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GEToauth-scopes">
                        <a href="#endpoints-GEToauth-scopes">Get all of the available scopes for the application.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GEToauth-personal-access-tokens">
                        <a href="#endpoints-GEToauth-personal-access-tokens">Get all of the personal access tokens for
                            the authenticated user.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSToauth-personal-access-tokens">
                        <a href="#endpoints-POSToauth-personal-access-tokens">Create a new personal access token for the
                            user.</a>
                    </li>
                    <li class="tocify-item level-2"
                        data-unique="endpoints-DELETEoauth-personal-access-tokens--token_id-">
                        <a href="#endpoints-DELETEoauth-personal-access-tokens--token_id-">Delete the given token.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                        <a href="#endpoints-GETapi-user">GET api/user</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETup">
                        <a href="#endpoints-GETup">GET up</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GET-">
                        <a href="#endpoints-GET-">Invoke the controller method.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETdashboard">
                        <a href="#endpoints-GETdashboard">GET dashboard</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETsettings">
                        <a href="#endpoints-GETsettings">Invoke the controller method.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETsettings-profile">
                        <a href="#endpoints-GETsettings-profile">Show the user's profile settings page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-PATCHsettings-profile">
                        <a href="#endpoints-PATCHsettings-profile">Update the user's profile settings.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-DELETEsettings-profile">
                        <a href="#endpoints-DELETEsettings-profile">Delete the user's account.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETsettings-password">
                        <a href="#endpoints-GETsettings-password">Show the user's password settings page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-PUTsettings-password">
                        <a href="#endpoints-PUTsettings-password">Update the user's password.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETsettings-appearance">
                        <a href="#endpoints-GETsettings-appearance">GET settings/appearance</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETregister">
                        <a href="#endpoints-GETregister">Show the registration page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTregister">
                        <a href="#endpoints-POSTregister">Handle an incoming registration request.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETlogin">
                        <a href="#endpoints-GETlogin">Show the login page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTlogin">
                        <a href="#endpoints-POSTlogin">Handle an incoming authentication request.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETforgot-password">
                        <a href="#endpoints-GETforgot-password">Show the password reset link request page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTforgot-password">
                        <a href="#endpoints-POSTforgot-password">Handle an incoming password reset link request.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETreset-password--token-">
                        <a href="#endpoints-GETreset-password--token-">Show the password reset page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTreset-password">
                        <a href="#endpoints-POSTreset-password">Handle an incoming new password request.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETverify-email">
                        <a href="#endpoints-GETverify-email">Show the email verification prompt page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETverify-email--id---hash-">
                        <a href="#endpoints-GETverify-email--id---hash-">Mark the authenticated user's email address as
                            verified.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTemail-verification-notification">
                        <a href="#endpoints-POSTemail-verification-notification">Send a new email verification
                            notification.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETconfirm-password">
                        <a href="#endpoints-GETconfirm-password">Show the confirm password page.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTconfirm-password">
                        <a href="#endpoints-POSTconfirm-password">Confirm the user's password.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTlogout">
                        <a href="#endpoints-POSTlogout">Destroy an authenticated session.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETstorage--path-">
                        <a href="#endpoints-GETstorage--path-">GET storage/{path}</a>
                    </li>
                </ul>
            </ul>
        </div>

        <ul class="toc-footer" id="toc-footer">
            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
        </ul>

        <ul class="toc-footer" id="last-updated">
            <li>Last updated: March 6, 2025</li>
        </ul>
    </div>

    <div class="page-wrapper">
        <div class="dark-box"></div>
        <div class="content">
            <h1 id="introduction">Introduction</h1>
            <p>A simple project manager built with Laravel and React.js</p>
            <aside>
                <strong>Base URL</strong>: <code>http://localhost</code>
            </aside>
            <pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

            <h1 id="authenticating-requests">Authenticating requests</h1>
            <p>This API is not authenticated.</p>

            <h1 id="endpoints">Endpoints</h1>



            <h2 id="endpoints-POSToauth-token">Authorize a client to access the user&#039;s account.</h2>

            <p>
            </p>



            <span id="example-requests-POSToauth-token">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/oauth/token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSToauth-token">
            </span>
            <span id="execution-results-POSToauth-token" hidden>
                <blockquote>Received response<span id="execution-response-status-POSToauth-token"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSToauth-token"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSToauth-token" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSToauth-token">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSToauth-token" data-method="POST" data-path="oauth/token" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSToauth-token', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSToauth-token" onclick="tryItOut('POSToauth-token');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSToauth-token" onclick="cancelTryOut('POSToauth-token');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSToauth-token" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>oauth/token</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSToauth-token"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSToauth-token"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GEToauth-authorize">Authorize a client to access the user&#039;s account.</h2>

            <p>
            </p>



            <span id="example-requests-GEToauth-authorize">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/oauth/authorize" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/authorize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GEToauth-authorize">
                <blockquote>
                    <p>Example response (400):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">content-type: application/json
cache-control: no-cache, private
vary: X-Inertia
set-cookie: XSRF-TOKEN=eyJpdiI6IkZ4cjlJeE0zM2F3SjJjVjB1SlJFUFE9PSIsInZhbHVlIjoiZm13QnlVM2lzUndiU3lJQVFsTUJjNVJvSlRrKzBkZllhcGxLRGJpcllNMWdLaFpyNVBUVlNMK3d6bitOUmNaTllkK0FnVkVHMlEzWFd2aHdJYjVXNFhEMlRJY0gzT1l6TUQ2S1NjNlVRUTY1bnRkWEhIUVhPZXFlK3ZmREFUWVQiLCJtYWMiOiI3NDBjZTBhMzYxN2IzZmMzZTdkYTYzNmE3MTBhOGE4NzQ2ZDRkMjJlN2Y0Y2FmMmEwYjQ1NzI5MjUxMGI1NTg1IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkZDTzJLZy9zZC82RVJCdmF4UnlFM0E9PSIsInZhbHVlIjoiVndZRkFEYXpNaVZmU2NqQ1lsbW9IMHk0dUl6NURMY3gxL3l3enQvdG9JQlJpV3dLc0tOTXp4Y3VORFRrYnphMXRXano5TkE5eis4eHNsNndnQlRyMTQ1THlnSklVU0VIYi9wb0hqMm5xYU95Ni9KK0R3dUJSQmpZbEtYOE1HRisiLCJtYWMiOiI4NWRjNTdmMzRhMGE4ZTQ2NjY0N2RmMzlmOTQ0MDVkNTc0OTRlOWE2ZmM4ODdjOGM0ZjQ5MDc5YWRmYTc5YjAyIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;unsupported_grant_type&quot;,
    &quot;error_description&quot;: &quot;The authorization grant type is not supported by the authorization server.&quot;,
    &quot;hint&quot;: &quot;Check that all required parameters have been provided&quot;,
    &quot;message&quot;: &quot;The authorization grant type is not supported by the authorization server.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GEToauth-authorize" hidden>
                <blockquote>Received response<span id="execution-response-status-GEToauth-authorize"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GEToauth-authorize"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GEToauth-authorize" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GEToauth-authorize">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GEToauth-authorize" data-method="GET" data-path="oauth/authorize" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GEToauth-authorize', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GEToauth-authorize" onclick="tryItOut('GEToauth-authorize');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GEToauth-authorize" onclick="cancelTryOut('GEToauth-authorize');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GEToauth-authorize" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>oauth/authorize</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GEToauth-authorize"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GEToauth-authorize"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSToauth-token-refresh">Get a fresh transient token cookie for the authenticated user.
            </h2>

            <p>
            </p>



            <span id="example-requests-POSToauth-token-refresh">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/oauth/token/refresh" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/token/refresh"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSToauth-token-refresh">
            </span>
            <span id="execution-results-POSToauth-token-refresh" hidden>
                <blockquote>Received response<span id="execution-response-status-POSToauth-token-refresh"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSToauth-token-refresh"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSToauth-token-refresh" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSToauth-token-refresh">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSToauth-token-refresh" data-method="POST" data-path="oauth/token/refresh" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSToauth-token-refresh', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSToauth-token-refresh" onclick="tryItOut('POSToauth-token-refresh');">Try it
                        out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSToauth-token-refresh" onclick="cancelTryOut('POSToauth-token-refresh');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSToauth-token-refresh" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>oauth/token/refresh</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSToauth-token-refresh"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSToauth-token-refresh"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSToauth-authorize">Approve the authorization request.</h2>

            <p>
            </p>



            <span id="example-requests-POSToauth-authorize">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/oauth/authorize" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/authorize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSToauth-authorize">
            </span>
            <span id="execution-results-POSToauth-authorize" hidden>
                <blockquote>Received response<span id="execution-response-status-POSToauth-authorize"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSToauth-authorize"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSToauth-authorize" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSToauth-authorize">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSToauth-authorize" data-method="POST" data-path="oauth/authorize" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSToauth-authorize', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSToauth-authorize" onclick="tryItOut('POSToauth-authorize');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSToauth-authorize" onclick="cancelTryOut('POSToauth-authorize');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSToauth-authorize" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>oauth/authorize</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSToauth-authorize"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSToauth-authorize"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-DELETEoauth-authorize">Deny the authorization request.</h2>

            <p>
            </p>



            <span id="example-requests-DELETEoauth-authorize">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/oauth/authorize" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/authorize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEoauth-authorize">
            </span>
            <span id="execution-results-DELETEoauth-authorize" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEoauth-authorize"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEoauth-authorize"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEoauth-authorize" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEoauth-authorize">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEoauth-authorize" data-method="DELETE" data-path="oauth/authorize" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-authorize', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEoauth-authorize" onclick="tryItOut('DELETEoauth-authorize');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEoauth-authorize" onclick="cancelTryOut('DELETEoauth-authorize');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEoauth-authorize" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>oauth/authorize</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="DELETEoauth-authorize"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="DELETEoauth-authorize"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GEToauth-tokens">Get all of the authorized tokens for the authenticated user.</h2>

            <p>
            </p>



            <span id="example-requests-GEToauth-tokens">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/oauth/tokens" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/tokens"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GEToauth-tokens">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IlhKS2pDV0ZCSEcvdStEM21URVZIL3c9PSIsInZhbHVlIjoiTHRUOUtwZWxXVWd5Y09HSWV2QWxxWWNVcGVoVFAyeG1BYld3S2I1dE9wUFZ6MzBYYkRybDVkUElxMHo4cTJQSE42SU9lWGd1cU5XdWh1aWREVm04UENhNkN2Z1duYi9rSy9iM3hBMmpLZENxRlg1NmcxQjNsRFdwbjNGeE8wTnUiLCJtYWMiOiI2Zjk5YWI3NTI0OTkzZDY1NWQ1YWExZDlhOGM5MzRiNGVjYjU2OTNiNmVjZDE3ZTE1OGM5NmY4YzAzNDVhMmE0IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkNWT1VWQ09TRWh2dGEyTjBGd1BHVXc9PSIsInZhbHVlIjoibVUxZDZQOXI5RytmSTVGLzVtMHRjTXRsZG1LVzFLWFFmOTh4OThPSGRFcjUrQ3BqZ1BSVDJhM0JHTHZROHovd294UVlkUFhSc1QvMXFaQ2w4RHB3SE9GK1hiTEFyR0NRRE1kNWlCTjhzQXFIY3B5dVliWjhlUUZIOXdlYXpTV1kiLCJtYWMiOiI0YjQwZDZkMDVkOTI0ZjRhYWY1YTg5Y2RlMzQxNmFjOGEwZGZhMTQyMGY5M2RkNDkxYWY4ZGIxNjgzNjY3ZDhjIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GEToauth-tokens" hidden>
                <blockquote>Received response<span id="execution-response-status-GEToauth-tokens"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GEToauth-tokens"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GEToauth-tokens" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GEToauth-tokens">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GEToauth-tokens" data-method="GET" data-path="oauth/tokens" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GEToauth-tokens', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GEToauth-tokens" onclick="tryItOut('GEToauth-tokens');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GEToauth-tokens" onclick="cancelTryOut('GEToauth-tokens');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GEToauth-tokens" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>oauth/tokens</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GEToauth-tokens"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GEToauth-tokens"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-DELETEoauth-tokens--token_id-">Delete the given token.</h2>

            <p>
            </p>



            <span id="example-requests-DELETEoauth-tokens--token_id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/oauth/tokens/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/tokens/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEoauth-tokens--token_id-">
            </span>
            <span id="execution-results-DELETEoauth-tokens--token_id-" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEoauth-tokens--token_id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEoauth-tokens--token_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEoauth-tokens--token_id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEoauth-tokens--token_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEoauth-tokens--token_id-" data-method="DELETE" data-path="oauth/tokens/{token_id}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-tokens--token_id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEoauth-tokens--token_id-"
                        onclick="tryItOut('DELETEoauth-tokens--token_id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEoauth-tokens--token_id-"
                        onclick="cancelTryOut('DELETEoauth-tokens--token_id-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEoauth-tokens--token_id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>oauth/tokens/{token_id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="DELETEoauth-tokens--token_id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="DELETEoauth-tokens--token_id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>token_id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="token_id"
                        data-endpoint="DELETEoauth-tokens--token_id-" value="architecto" data-component="url">
                    <br>
                    <p>The ID of the token. Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-GEToauth-clients">Get all of the clients for the authenticated user.</h2>

            <p>
            </p>



            <span id="example-requests-GEToauth-clients">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/oauth/clients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/clients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GEToauth-clients">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InE3R2pGNEJtZTVuRzR0M3lCSnQ4RUE9PSIsInZhbHVlIjoiSjRCUUUvMXlnYXNGVnluZ1dpZ29Ud0FBTjhNOGJqbXBLdlVPUGZSSHVHL20xRENQM1dVS3Rlc2lzTDZWK05yRUh5K29ZTEVJNnRMVEoweHE3VkxEUFRqTmt0RFFoOTYwMmtiMnBKMGRBdzBVdlpkNG9oWXdYcmwrQlJWbHA0WmsiLCJtYWMiOiJiYmMzMjUxNTUzZTRlM2ZkNTI1Njc1ZWExNTdjNjE1ZDIxMTI4YjY4MzM3ZWUyYWVmNWE1ZmMwN2RmNDA0ZmU2IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlZhY1QvK1ZSeHZSSTNVdEVwMEEwdkE9PSIsInZhbHVlIjoib2Z5OEY1RkJtM0VLMGpJNFB6ckJrSkNBTnRGUDZKaUFtYktqbWEyVmpReCs2S25iSDV3ZHBzSTZjVmxFb05ZMGRacE9YWVU4eUNDNFh4R2hUT0c4akRLSmFBY2F2VnRhS2lYOXl0MG5BOHNSaWUzWHVJdmpGVXVQSkJjQXVzZ0oiLCJtYWMiOiIzMDM1NmJiZjc5ZmQ2ODljNjU3MzE2OWJmZDg1MDg1MTY2NTIwNmQ5NzllOTMwNjNjMWVjNGJkM2ViODA2ZTI5IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GEToauth-clients" hidden>
                <blockquote>Received response<span id="execution-response-status-GEToauth-clients"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GEToauth-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GEToauth-clients" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GEToauth-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GEToauth-clients" data-method="GET" data-path="oauth/clients" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GEToauth-clients', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GEToauth-clients" onclick="tryItOut('GEToauth-clients');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GEToauth-clients" onclick="cancelTryOut('GEToauth-clients');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GEToauth-clients" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>oauth/clients</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GEToauth-clients"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GEToauth-clients"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSToauth-clients">Store a new client.</h2>

            <p>
            </p>



            <span id="example-requests-POSToauth-clients">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/oauth/clients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/clients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSToauth-clients">
            </span>
            <span id="execution-results-POSToauth-clients" hidden>
                <blockquote>Received response<span id="execution-response-status-POSToauth-clients"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSToauth-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSToauth-clients" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSToauth-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSToauth-clients" data-method="POST" data-path="oauth/clients" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSToauth-clients', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSToauth-clients" onclick="tryItOut('POSToauth-clients');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSToauth-clients" onclick="cancelTryOut('POSToauth-clients');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSToauth-clients" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>oauth/clients</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSToauth-clients"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSToauth-clients"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-PUToauth-clients--client_id-">Update the given client.</h2>

            <p>
            </p>



            <span id="example-requests-PUToauth-clients--client_id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/oauth/clients/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/clients/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-PUToauth-clients--client_id-">
            </span>
            <span id="execution-results-PUToauth-clients--client_id-" hidden>
                <blockquote>Received response<span id="execution-response-status-PUToauth-clients--client_id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUToauth-clients--client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-PUToauth-clients--client_id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUToauth-clients--client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-PUToauth-clients--client_id-" data-method="PUT" data-path="oauth/clients/{client_id}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUToauth-clients--client_id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUToauth-clients--client_id-"
                        onclick="tryItOut('PUToauth-clients--client_id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUToauth-clients--client_id-"
                        onclick="cancelTryOut('PUToauth-clients--client_id-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUToauth-clients--client_id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>oauth/clients/{client_id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="PUToauth-clients--client_id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="PUToauth-clients--client_id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="client_id"
                        data-endpoint="PUToauth-clients--client_id-" value="architecto" data-component="url">
                    <br>
                    <p>The ID of the client. Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-DELETEoauth-clients--client_id-">Delete the given client.</h2>

            <p>
            </p>



            <span id="example-requests-DELETEoauth-clients--client_id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/oauth/clients/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/clients/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEoauth-clients--client_id-">
            </span>
            <span id="execution-results-DELETEoauth-clients--client_id-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-DELETEoauth-clients--client_id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEoauth-clients--client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEoauth-clients--client_id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEoauth-clients--client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEoauth-clients--client_id-" data-method="DELETE" data-path="oauth/clients/{client_id}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-clients--client_id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEoauth-clients--client_id-"
                        onclick="tryItOut('DELETEoauth-clients--client_id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEoauth-clients--client_id-"
                        onclick="cancelTryOut('DELETEoauth-clients--client_id-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEoauth-clients--client_id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>oauth/clients/{client_id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="DELETEoauth-clients--client_id-" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="DELETEoauth-clients--client_id-" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="client_id"
                        data-endpoint="DELETEoauth-clients--client_id-" value="architecto" data-component="url">
                    <br>
                    <p>The ID of the client. Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-GEToauth-scopes">Get all of the available scopes for the application.</h2>

            <p>
            </p>



            <span id="example-requests-GEToauth-scopes">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/oauth/scopes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/scopes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GEToauth-scopes">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjdzN2ZoWXRRdW1hWGpEUktFa0RQR0E9PSIsInZhbHVlIjoiRjZTNkFiWDJPTnhTeDR6RGNHaENPYVlTeFB5dHRxL1d0YytZa2wrMSs4TUprNkZ3OUdxRml0Vm1pN281eWJnSUt3a1E5bzhPMWFMRVlxZDZxa2RnbHJDMG04YWR0ZTM3ZzlnWk5Rb0trUllDZEJLSXd4eTkvWERwVG9uRDJJQkMiLCJtYWMiOiJlMTM3ZjdhMmQ0NWVlN2JkNjdjOTE2NWZiMTJiNmFhM2U5NDViNWQzNTY4YjdiODQ1NzQ3YTQ2ZGUwMmYzODI2IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkxheXczWXVBU2p3eFkwak1LY2dUSnc9PSIsInZhbHVlIjoiN1RpWGkxcEtRS3p2YWp0aCs5RGtKSjQ5Y1paR3JtSnlOdU9CbVVEYVVtK1lQYVd6TVA4SlVOb3VMeS82V2Q1eDRsSW82Z1NwbnZDeEJRR09BaHdjei9XdUp6bGx6NkxqQzk4Vk5nMldJZGpySVY0QmIvVjVuVHVISGtEK2N5bzIiLCJtYWMiOiI0MmNlOWJjYWE4MjZkODcwODY5Mjc1OTUwMzI4Yjc1N2I4NTFjY2U3NGY3NThmZTBhNGY4NWE2NDNkYTY4YmVhIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GEToauth-scopes" hidden>
                <blockquote>Received response<span id="execution-response-status-GEToauth-scopes"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GEToauth-scopes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GEToauth-scopes" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GEToauth-scopes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GEToauth-scopes" data-method="GET" data-path="oauth/scopes" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GEToauth-scopes', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GEToauth-scopes" onclick="tryItOut('GEToauth-scopes');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GEToauth-scopes" onclick="cancelTryOut('GEToauth-scopes');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GEToauth-scopes" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>oauth/scopes</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GEToauth-scopes"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GEToauth-scopes"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GEToauth-personal-access-tokens">Get all of the personal access tokens for the
                authenticated user.</h2>

            <p>
            </p>



            <span id="example-requests-GEToauth-personal-access-tokens">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/oauth/personal-access-tokens" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GEToauth-personal-access-tokens">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6Imtpdy9xdFU0M1pUZHRRc3o1SXhZaFE9PSIsInZhbHVlIjoiSTlzTVBxTCtJS3ZEcFJ3SWVLTloybkVMRXE4ZUx4NWJPNUV5MFc0MHRNZU9tR0VqWmkyMS82WEFydWNMV3c2cDQwNitvMUZUSWUzZ0RrcnREY29nZTFzTGdCcDZpUFVXeWwvNmJ3UHY1VXU3eVBaVmlGK0ZTT1JjMTdsK2dLaEUiLCJtYWMiOiIxZGFlNDhmN2I5ZWYxNzljZDkyZDA1NWNmNGQwNTgzMmRhOGI5NmVjYmVlZTJkNjU0M2JmZDk5YTY4MDdmOWRlIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImlhdTMrUFZTeDFYeEdHMkxYcm1BOUE9PSIsInZhbHVlIjoiTUdpZGJOWjRUTE9xMHE4dGkwbW42eG02bjRRdW9CRmJFTzBiSE5odCtNeEJvaWJrL1ErVG9oMFo5TkZjYmNBWnBSM0tlc0x1UEhKT2N2SmZqOGlpdWZuczIzQWZ4MXk5Ym4xbHBqUGxWaUJSbHEveUVUK0hvUFNKT1FtM0JRUCsiLCJtYWMiOiJmZDkyZTcwZDNlZTYzODIwMWNjMDJhMGM4YjQxNjliNTI0YTE3YzM4MjkxNGUwNDU0ZTMxNjUyZjFjNmNjYzkyIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GEToauth-personal-access-tokens" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-GEToauth-personal-access-tokens"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GEToauth-personal-access-tokens"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GEToauth-personal-access-tokens" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GEToauth-personal-access-tokens">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GEToauth-personal-access-tokens" data-method="GET" data-path="oauth/personal-access-tokens"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GEToauth-personal-access-tokens', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GEToauth-personal-access-tokens"
                        onclick="tryItOut('GEToauth-personal-access-tokens');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GEToauth-personal-access-tokens"
                        onclick="cancelTryOut('GEToauth-personal-access-tokens');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GEToauth-personal-access-tokens" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>oauth/personal-access-tokens</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GEToauth-personal-access-tokens" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GEToauth-personal-access-tokens" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSToauth-personal-access-tokens">Create a new personal access token for the user.</h2>

            <p>
            </p>



            <span id="example-requests-POSToauth-personal-access-tokens">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/oauth/personal-access-tokens" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSToauth-personal-access-tokens">
            </span>
            <span id="execution-results-POSToauth-personal-access-tokens" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-POSToauth-personal-access-tokens"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSToauth-personal-access-tokens"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSToauth-personal-access-tokens" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSToauth-personal-access-tokens">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSToauth-personal-access-tokens" data-method="POST" data-path="oauth/personal-access-tokens"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSToauth-personal-access-tokens', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSToauth-personal-access-tokens"
                        onclick="tryItOut('POSToauth-personal-access-tokens');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSToauth-personal-access-tokens"
                        onclick="cancelTryOut('POSToauth-personal-access-tokens');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSToauth-personal-access-tokens" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>oauth/personal-access-tokens</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSToauth-personal-access-tokens" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="POSToauth-personal-access-tokens" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-DELETEoauth-personal-access-tokens--token_id-">Delete the given token.</h2>

            <p>
            </p>



            <span id="example-requests-DELETEoauth-personal-access-tokens--token_id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/oauth/personal-access-tokens/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/oauth/personal-access-tokens/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEoauth-personal-access-tokens--token_id-">
            </span>
            <span id="execution-results-DELETEoauth-personal-access-tokens--token_id-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-DELETEoauth-personal-access-tokens--token_id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEoauth-personal-access-tokens--token_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEoauth-personal-access-tokens--token_id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEoauth-personal-access-tokens--token_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEoauth-personal-access-tokens--token_id-" data-method="DELETE"
                data-path="oauth/personal-access-tokens/{token_id}" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-personal-access-tokens--token_id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEoauth-personal-access-tokens--token_id-"
                        onclick="tryItOut('DELETEoauth-personal-access-tokens--token_id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEoauth-personal-access-tokens--token_id-"
                        onclick="cancelTryOut('DELETEoauth-personal-access-tokens--token_id-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEoauth-personal-access-tokens--token_id-"
                        data-initial-text="Send Request 💥" data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>oauth/personal-access-tokens/{token_id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="DELETEoauth-personal-access-tokens--token_id-" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="DELETEoauth-personal-access-tokens--token_id-" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>token_id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="token_id"
                        data-endpoint="DELETEoauth-personal-access-tokens--token_id-" value="architecto"
                        data-component="url">
                    <br>
                    <p>The ID of the token. Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETapi-user">GET api/user</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-user">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-user">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-user" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-user" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-user" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/user</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETapi-user"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-user"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETup">GET up</h2>

            <p>
            </p>



            <span id="example-requests-GETup">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/up" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/up"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETup">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
    &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

    &lt;!-- Styles --&gt;
    &lt;script src=&quot;https://cdn.tailwindcss.com&quot;&gt;&lt;/script&gt;

    &lt;script&gt;
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: [&#039;Figtree&#039;, &#039;ui-sans-serif&#039;, &#039;system-ui&#039;, &#039;sans-serif&#039;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;],
                    }
                }
            }
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body class=&quot;antialiased&quot;&gt;
&lt;div class=&quot;relative flex justify-center items-center min-h-screen bg-gray-100 selection:bg-red-500 selection:text-white&quot;&gt;
    &lt;div class=&quot;w-full sm:w-3/4 xl:w-1/2 mx-auto p-6&quot;&gt;
        &lt;div class=&quot;px-6 py-4 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex items-center focus:outline focus:outline-2 focus:outline-red-500&quot;&gt;
            &lt;div class=&quot;relative flex h-3 w-3 group &quot;&gt;
                &lt;span class=&quot;animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 group-[.status-down]:bg-red-600 opacity-75&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;relative inline-flex rounded-full h-3 w-3 bg-green-400 group-[.status-down]:bg-red-600&quot;&gt;&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class=&quot;ml-6&quot;&gt;
                &lt;h2 class=&quot;text-xl font-semibold text-gray-900&quot;&gt;Application up&lt;/h2&gt;

                &lt;p class=&quot;mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed&quot;&gt;
                    HTTP request received.

                                            Response rendered in 547ms.
                                    &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
            </span>
            <span id="execution-results-GETup" hidden>
                <blockquote>Received response<span id="execution-response-status-GETup"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETup"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETup" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETup">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETup" data-method="GET" data-path="up" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETup', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETup" onclick="tryItOut('GETup');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETup" onclick="cancelTryOut('GETup');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETup" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>up</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETup"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETup"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GET-">Invoke the controller method.</h2>

            <p>
            </p>



            <span id="example-requests-GET-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GET-">
                <blockquote>
                    <p>Example response (301):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">location: /dashboard
content-type: text/html; charset=utf-8
vary: X-Inertia
set-cookie: XSRF-TOKEN=eyJpdiI6ImFOVHJaSHp2S3E4WUdlMU16RGdUT0E9PSIsInZhbHVlIjoiaDE3MmFmYTZXWlVzQTNNYVlEWllYU28rbExuVCtWQUlXOTFVa3RkQ09OL1lBSm1UZ0dGM0p5aXFNUXJhWldRcmk1NjEzdkpmTkgzRCtTd3VNaGhHbnc3eVVJdFplOG5jUDVpT3RGZUppRWtYZWFPb1pTRVYxLzBzZWF1c3NOeVMiLCJtYWMiOiJhMTQxYWNkYTU4MmYzMjg5ODQyYTIwNjAxOTI2OWU3NDVkN2JhNDMwY2Q4OGVmMjI0YTZhNmQ2OTlkOWI1ZDNlIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkJFL3o0c3NlRmYzYWo5NC9qaWZWVGc9PSIsInZhbHVlIjoiOXF1ejhKMmpmWWtLQ3BzU1RBZmFwSFJaTE0zdnBCdUZuQzliU0JmaU9KeFJHQzM0ejVjOVcycjE0aWlKeDVpUVBMcVQyZ0ZISUgrSEorNW5ZOUJ0UmRIbEtkU0dCc1Z4OVM5N3VDVUorenI5OGwrNGZyVW5XOHZJM2F5N0p2QkYiLCJtYWMiOiI5OTYxMDc1NTRhNjFjYjVmZGZhMzdiYWE0ZjJjYjNiYjcxYmRmMjQyZWM4MzEwNDViNmMzM2RjNzQzYWNjYjFjIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;/dashboard&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to /dashboard&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;/dashboard&quot;&gt;/dashboard&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
            </span>
            <span id="execution-results-GET-" hidden>
                <blockquote>Received response<span id="execution-response-status-GET-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GET-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GET-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GET-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-isarraybody="0"
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GET-" data-initial-text="Send Request 💥" data-loading-text="⏱ Sending..."
                        hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>/</code></b>
                </p>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>/</code></b>
                </p>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>/</code></b>
                </p>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>/</code></b>
                </p>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>/</code></b>
                </p>
                <p>
                    <small class="badge badge-grey">OPTIONS</small>
                    <b><code>/</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GET-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GET-" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETdashboard">GET dashboard</h2>

            <p>
            </p>



            <span id="example-requests-GETdashboard">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETdashboard">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IkdvdUsyc3JOUytsOGhtenVnNkFVbXc9PSIsInZhbHVlIjoiTUoycVdWUGFvWWViR0RFZ3djM2NyaUh0QXl3V1JEcmZ4ZFQwZlBvUnR0YkcvdDNWQkxWWHBDMGZWcTJFMDlPOC82WTFaNjV5b0twcDBOckk4S1BqMmVSY1A1QnZTd2N5czRyMklpeDZEY1ZrclVEMllIVzFoMWFoUFN4aTBJT3oiLCJtYWMiOiJmM2JlM2JjOWU0MGIzMDlkMTgzNjg3ZTI1N2I4M2M4NGQyZDRjNWRmMWVhNWQyN2M4NmMyNDQzZDNkZWQ2NjQ2IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InpjVjJ4R2dvT3grdzloaFk1UEE5UWc9PSIsInZhbHVlIjoiZmhCUUxNR3VydFF1YkJrT1FqZXJNWjJMbm1FZXcxWnBxRE13cXNndGh4R1BEbFdzRHZCRitoL2VVcVZ5TFNqZUlUSkliOU1qZGRKcHR0eWp4cE1Nd2pCeVVrUVEvVEN1b3VaTTFNMnBjYXd4WEM4My9wRnN3SUZ4WFJ0TzNONnAiLCJtYWMiOiI0OTExNzdmYTA5NTA2MTU2YTFkMzM5ODU1YzZmMmEwMDU0NGM4ZTlkZDdjODIwODhiYTdkNjg4NzI4NTg4NjY5IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETdashboard" hidden>
                <blockquote>Received response<span id="execution-response-status-GETdashboard"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETdashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETdashboard" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETdashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETdashboard" data-method="GET" data-path="dashboard" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETdashboard', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETdashboard" onclick="tryItOut('GETdashboard');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETdashboard" onclick="cancelTryOut('GETdashboard');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETdashboard" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>dashboard</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETdashboard"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETdashboard"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETsettings">Invoke the controller method.</h2>

            <p>
            </p>



            <span id="example-requests-GETsettings">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/settings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/settings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETsettings">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IlJiWS9oL1NnZmpMTGR1NjFwcWNQbnc9PSIsInZhbHVlIjoiWjl6SjhqOStyVUpKbEpGeHhEWDhyRWVSQi9DUVBOM0tqNnhlK09leVlFS2tzaXBuTm1kWjlUVGxQMTU1Z2pROTg0ZWRYQXVvT0FtMVZJTXdIN21IRzArQm5uUHAzNjE0cWJOd0VpdmhRTFRQL1hTZlVvbUZvSFdKdmdtWkdISWUiLCJtYWMiOiIxZGIwOGU4M2NiYWMyN2M5NGNmODk4NWMyZjVjN2UxMGRlMDUwNWQ4MGNhNGM4ZmU0M2FkN2RjZGIyZGZmMDBlIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImsxK0dpWEVhdmM4MU9EMlZYVkxxZUE9PSIsInZhbHVlIjoiOVduSnVKMFFuK0JLMTBick5sc3BrbXRSUGtXYlVtbGlHdGs3c0NNcFlvVzJXYzN6cS8wU1JCQ2RkK2JLWXpLTVk5OVJ2WVFTSXl4R0lSUEd1czJ3bUxkaHA4L3dQZzVPM2l0YlJHRDJCam9yWnRhUy9mdkNLbGFNZTZ2R1dnY3AiLCJtYWMiOiI3ZTVkMWJiOGUxNDdjZWMyNGNlZTUxNTlmYjhiNjM0YmM1NmNjOTkyMjBiNzhlMTFmMzhkODAyZTEwYTAzY2RjIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETsettings" hidden>
                <blockquote>Received response<span id="execution-response-status-GETsettings"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETsettings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETsettings" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETsettings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETsettings" data-method="GET" data-path="settings" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETsettings', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETsettings" onclick="tryItOut('GETsettings');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETsettings" onclick="cancelTryOut('GETsettings');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETsettings" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>settings</code></b>
                </p>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>settings</code></b>
                </p>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>settings</code></b>
                </p>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>settings</code></b>
                </p>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>settings</code></b>
                </p>
                <p>
                    <small class="badge badge-grey">OPTIONS</small>
                    <b><code>settings</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETsettings"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETsettings"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETsettings-profile">Show the user&#039;s profile settings page.</h2>

            <p>
            </p>



            <span id="example-requests-GETsettings-profile">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/settings/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/settings/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETsettings-profile">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InlodnhIWjgvdHNSZWNxWGNOTE94SFE9PSIsInZhbHVlIjoieCtaeGJVY2IvUytxZm1OcnVDeFZBVHoxUnRRZjVIZW1zekQwYkpKbVUrVUtoZ2dQamVocmlNS1pnNXFOUFRqZ0d5enZtRS93VTZ5WHhqTWNOaU1qSFovRE9OME5CYzBGd1R1OElOWUxrNWhZMUNrc2IyZzg4cmducGhQVnpxY20iLCJtYWMiOiJjYzkxZWM0MWJkOTAwY2E1ODU4MmNiZGUzYjUwMjdlYWYzZTAyYmY2OTBiZGU3Zjc2ZWY4NjE2Yjc3MjEyNDc3IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Im40MHpHWnhzQUR3WGpJVlZZNWZXMGc9PSIsInZhbHVlIjoiYkVuNS81RGZibXlCb05CeTRIWllPbmdwYVBWMVpqTHhSQVNkM0hpMmRLWFdTVHpsVDJoYStFU0lUTFl6QngrZkdzUEtQbHFraDI5bzhZUEdWajRqWmF4WE5SRklzQUZ2UXNoL3dma1J0RW96MU1Ud24xbjBOa0FublFvR1NWUU8iLCJtYWMiOiI2ZTg0OTU0ZDFmZjFiNDBiMWNkOTA1MGUzMjJiMWFlYzk0MzdjMGNlZTdhZDMwZWE2ZDc5ZTIzOTQ0NzNmYzI1IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETsettings-profile" hidden>
                <blockquote>Received response<span id="execution-response-status-GETsettings-profile"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETsettings-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETsettings-profile" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETsettings-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETsettings-profile" data-method="GET" data-path="settings/profile" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETsettings-profile', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETsettings-profile" onclick="tryItOut('GETsettings-profile');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETsettings-profile" onclick="cancelTryOut('GETsettings-profile');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETsettings-profile" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>settings/profile</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETsettings-profile"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETsettings-profile"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-PATCHsettings-profile">Update the user&#039;s profile settings.</h2>

            <p>
            </p>



            <span id="example-requests-PATCHsettings-profile">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/settings/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/settings/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-PATCHsettings-profile">
            </span>
            <span id="execution-results-PATCHsettings-profile" hidden>
                <blockquote>Received response<span id="execution-response-status-PATCHsettings-profile"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PATCHsettings-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-PATCHsettings-profile" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PATCHsettings-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-PATCHsettings-profile" data-method="PATCH" data-path="settings/profile" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PATCHsettings-profile', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PATCHsettings-profile" onclick="tryItOut('PATCHsettings-profile');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PATCHsettings-profile" onclick="cancelTryOut('PATCHsettings-profile');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PATCHsettings-profile" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>settings/profile</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="PATCHsettings-profile"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="PATCHsettings-profile"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="name" data-endpoint="PATCHsettings-profile" value="b"
                        data-component="body">
                    <br>
                    <p>Must not be greater than 255 characters. Example: <code>b</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="email" data-endpoint="PATCHsettings-profile"
                        value="zbailey@example.net" data-component="body">
                    <br>
                    <p>Must be a valid email address. Must not be greater than 255 characters. Example:
                        <code>zbailey@example.net</code></p>
                </div>
            </form>

            <h2 id="endpoints-DELETEsettings-profile">Delete the user&#039;s account.</h2>

            <p>
            </p>



            <span id="example-requests-DELETEsettings-profile">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/settings/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"architecto\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/settings/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "architecto"
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEsettings-profile">
            </span>
            <span id="execution-results-DELETEsettings-profile" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEsettings-profile"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEsettings-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEsettings-profile" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEsettings-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEsettings-profile" data-method="DELETE" data-path="settings/profile" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEsettings-profile', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEsettings-profile" onclick="tryItOut('DELETEsettings-profile');">Try it out
                        ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEsettings-profile" onclick="cancelTryOut('DELETEsettings-profile');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEsettings-profile" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>settings/profile</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="DELETEsettings-profile"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="DELETEsettings-profile"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="DELETEsettings-profile"
                        value="architecto" data-component="body">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETsettings-password">Show the user&#039;s password settings page.</h2>

            <p>
            </p>



            <span id="example-requests-GETsettings-password">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/settings/password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/settings/password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETsettings-password">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6Im1RcW9XMEV2YnA3MlBrVnlIT1JkSEE9PSIsInZhbHVlIjoiODRXbjYxeUhPT2VSVEhRRTF0MXo4SU45c0J1d2gzc1l5ei9FN3h6M2F3aTdZMk9pS2xINy95MzRsa2paSWlEd0tRY2pWUXJ3bExUWjNMb3VieXJlN0s4VlVKQWlmRmJ3cTdROUM1VHVTZ3QycWUwN1I3dDJxNUxvLzFZL1poTmQiLCJtYWMiOiJiZjE4ZDM3OWYxZmY4NjY3MjVhY2FhNTY4MDBlZjc1NDhmNzIwMWMxOWQ3YWVkMTk0ZTM4Yzk3ZDQ3YjFkYWU1IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkpoekVnWUFzWnhhZnRkci9vZ1NKTUE9PSIsInZhbHVlIjoiWjBlRnM1d2xFT1RGMG5pTkdkd3RVcUVUa1AwTHN3cER2a1RlcEZua0VmaUQza3N0R24wRlZCb2VEVjVxWmpEc2JkbnBqU0NrTE5CQkV6QksxcGFCR012bXV1aTF2S2xGcmk4anQ2UDJnNTNnVzJCbTBpNkwwcmJ2OHBCY3V6dU0iLCJtYWMiOiI2N2IxNDJkZWMzOTk4OTc2NzE5ZWExZmIxNDBlZjQ5Mjk3MGZiZGM5MWNlMjMxMTEwMmMzNGVlZmQxNTYzOGNmIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETsettings-password" hidden>
                <blockquote>Received response<span id="execution-response-status-GETsettings-password"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETsettings-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETsettings-password" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETsettings-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETsettings-password" data-method="GET" data-path="settings/password" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETsettings-password', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETsettings-password" onclick="tryItOut('GETsettings-password');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETsettings-password" onclick="cancelTryOut('GETsettings-password');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETsettings-password" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>settings/password</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETsettings-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETsettings-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-PUTsettings-password">Update the user&#039;s password.</h2>

            <p>
            </p>



            <span id="example-requests-PUTsettings-password">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/settings/password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"current_password\": \"architecto\",
    \"password\": \"architecto\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/settings/password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "architecto",
    "password": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-PUTsettings-password">
            </span>
            <span id="execution-results-PUTsettings-password" hidden>
                <blockquote>Received response<span id="execution-response-status-PUTsettings-password"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUTsettings-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-PUTsettings-password" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUTsettings-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-PUTsettings-password" data-method="PUT" data-path="settings/password" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTsettings-password', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTsettings-password" onclick="tryItOut('PUTsettings-password');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTsettings-password" onclick="cancelTryOut('PUTsettings-password');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTsettings-password" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>settings/password</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="PUTsettings-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="PUTsettings-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>current_password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="current_password"
                        data-endpoint="PUTsettings-password" value="architecto" data-component="body">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="PUTsettings-password"
                        value="architecto" data-component="body">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETsettings-appearance">GET settings/appearance</h2>

            <p>
            </p>



            <span id="example-requests-GETsettings-appearance">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/settings/appearance" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/settings/appearance"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETsettings-appearance">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6Ikt3NnZWUnJYVDZRTXgwNzA1dGhic3c9PSIsInZhbHVlIjoiNUFXQTNEVkZIbDJ6WVZlREZyajFMVno1N1BHNlBjbk5LalZDR01jU2xNVW9BRE5lYStmM1o1ZWhYSFBOdCt0UHBVK1FxZXQ1TlVndVg2aXdkVUFRNTUvaHhza0JWVk9neTZYb2hvckh0QzluZWFIOGNzWDNpbE9hZnNYZlc0L2EiLCJtYWMiOiIxMTY4MGFkODlkOGFlZjQ2YmM0MjdhYjlmMDM1ODRiNTQ5MTNjMWQzYjEyMTJmMjlkMmIxNjMwZGU1MmRlMWE0IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Ikg0TDMzQzJMeXpkOXh2bWd0ck1iTWc9PSIsInZhbHVlIjoiUXFLR0Iwb3l2SDVoQ0NObit0QjQyaEhsTEs1ancyMmh3dWUwZGJOeVFhUVRHZkc0VXhndlNOSlZaZkV3VzdBelFoN2JlV3BaanVBR3VXdW42Q3ROMWhJNDNZUVF5Z1IzbHZaeDQwVS9yQlYzVVpURUZ5UUZqTC9yWkVxVHpJVmUiLCJtYWMiOiIwZGZhOTIzMDBiZWI1YTVjYjdjMGQ2ZTAxYWZkNzVhZjYzNjc0NDYxMWVmNjJiZTNmNDJkYTE0OTAwNWJkYjliIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETsettings-appearance" hidden>
                <blockquote>Received response<span id="execution-response-status-GETsettings-appearance"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETsettings-appearance"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETsettings-appearance" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETsettings-appearance">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETsettings-appearance" data-method="GET" data-path="settings/appearance" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETsettings-appearance', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETsettings-appearance" onclick="tryItOut('GETsettings-appearance');">Try it out
                        ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETsettings-appearance" onclick="cancelTryOut('GETsettings-appearance');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETsettings-appearance" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>settings/appearance</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETsettings-appearance"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETsettings-appearance"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETregister">Show the registration page.</h2>

            <p>
            </p>



            <span id="example-requests-GETregister">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETregister">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: X-Inertia
set-cookie: XSRF-TOKEN=eyJpdiI6ImtLanhvWklNbjV5cnBoMWwvcTVmRUE9PSIsInZhbHVlIjoiSURaWk1ETUZFMVZLYTBxZnNGZ2RGL2Fua2QwdGtSM1FzMk9QN29OcFFsc09kU3RmNW1Bd1EwSTBaU3pVYUJiRmtXbEN3TDZkWFgxeGZKdzJIelZCM2tCUGhvZHJzem82ZjNCejdYQ1ZaNE5LYkFVVVp3RWpUdm1vMVV1QmE4aGgiLCJtYWMiOiJmNTRkOTZiZDA0YzRhNjQ0YjI2N2MwZDY5M2MxMTQ1NGJmZDA4NDg5ODk1MDU0MWZlNzk0NGZjZTc5NGViZjdkIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InhScHhlTWVWM2dYeHlSN1VOTlltOEE9PSIsInZhbHVlIjoiNlNCcUpBYXU0VzI1STI5cmZ4WTBXZXFDSWRIV0d0Q2RIWUFyaTRPdG40UGQ4eEwxdUIxeFhtaFgvVCtSZklKRUNvZlBuOWF6cUhweE5Ra0dGM00vMkwzRzNTdmNoV2hTWnZsQ29SaXNiUVE3YWlIdWVCcFQ1WitxNllVTkVBemsiLCJtYWMiOiIyYTk1ZTVmMTAxNWE5MTdmZjM4YzZmZjY2ODFjZjAxYzI4MGMxYjZhZTc2NGI3YjZiODJmMzQ0MmNjZTBhZTcwIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title inertia&gt;Laravel&lt;/title&gt;

        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=instrument-sans:400,500,600&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;script type=&quot;text/javascript&quot;&gt;const Ziggy={&quot;url&quot;:&quot;http:\/\/localhost&quot;,&quot;port&quot;:null,&quot;defaults&quot;:{},&quot;routes&quot;:{&quot;scribe&quot;:{&quot;uri&quot;:&quot;docs&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.postman&quot;:{&quot;uri&quot;:&quot;docs.postman&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.openapi&quot;:{&quot;uri&quot;:&quot;docs.openapi&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token&quot;:{&quot;uri&quot;:&quot;oauth\/token&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.authorize&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token.refresh&quot;:{&quot;uri&quot;:&quot;oauth\/token\/refresh&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.approve&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.deny&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;passport.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;passport.clients.index&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.clients.store&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.clients.update&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;PUT&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.clients.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.scopes.index&quot;:{&quot;uri&quot;:&quot;oauth\/scopes&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.store&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.personal.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;dashboard&quot;:{&quot;uri&quot;:&quot;dashboard&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.edit&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.update&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;PATCH&quot;]},&quot;profile.destroy&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;password.edit&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.update&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;PUT&quot;]},&quot;appearance&quot;:{&quot;uri&quot;:&quot;settings\/appearance&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;register&quot;:{&quot;uri&quot;:&quot;register&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;login&quot;:{&quot;uri&quot;:&quot;login&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.request&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.email&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.reset&quot;:{&quot;uri&quot;:&quot;reset-password\/{token}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;token&quot;]},&quot;password.store&quot;:{&quot;uri&quot;:&quot;reset-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;verification.notice&quot;:{&quot;uri&quot;:&quot;verify-email&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;verification.verify&quot;:{&quot;uri&quot;:&quot;verify-email\/{id}\/{hash}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;id&quot;,&quot;hash&quot;]},&quot;verification.send&quot;:{&quot;uri&quot;:&quot;email\/verification-notification&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.confirm&quot;:{&quot;uri&quot;:&quot;confirm-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;logout&quot;:{&quot;uri&quot;:&quot;logout&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;storage.local&quot;:{&quot;uri&quot;:&quot;storage\/{path}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;wheres&quot;:{&quot;path&quot;:&quot;.*&quot;},&quot;parameters&quot;:[&quot;path&quot;]}}};!function(t,r){&quot;object&quot;==typeof exports&amp;&amp;&quot;undefined&quot;!=typeof module?module.exports=r():&quot;function&quot;==typeof define&amp;&amp;define.amd?define(r):(t||self).route=r()}(this,function(){function t(t,r){for(var n=0;n&lt;r.length;n++){var e=r[n];e.enumerable=e.enumerable||!1,e.configurable=!0,&quot;value&quot;in e&amp;&amp;(e.writable=!0),Object.defineProperty(t,u(e.key),e)}}function r(r,n,e){return n&amp;&amp;t(r.prototype,n),e&amp;&amp;t(r,e),Object.defineProperty(r,&quot;prototype&quot;,{writable:!1}),r}function n(){return n=Object.assign?Object.assign.bind():function(t){for(var r=1;r&lt;arguments.length;r++){var n=arguments[r];for(var e in n)({}).hasOwnProperty.call(n,e)&amp;&amp;(t[e]=n[e])}return t},n.apply(null,arguments)}function e(t){return e=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},e(t)}function o(){try{var t=!Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],function(){}))}catch(t){}return(o=function(){return!!t})()}function i(t,r){return i=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,r){return t.__proto__=r,t},i(t,r)}function u(t){var r=function(t){if(&quot;object&quot;!=typeof t||!t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var n=r.call(t,&quot;string&quot;);if(&quot;object&quot;!=typeof n)return n;throw new TypeError(&quot;@@toPrimitive must return a primitive value.&quot;)}return String(t)}(t);return&quot;symbol&quot;==typeof r?r:r+&quot;&quot;}function f(t){var r=&quot;function&quot;==typeof Map?new Map:void 0;return f=function(t){if(null===t||!function(t){try{return-1!==Function.toString.call(t).indexOf(&quot;[native code]&quot;)}catch(r){return&quot;function&quot;==typeof t}}(t))return t;if(&quot;function&quot;!=typeof t)throw new TypeError(&quot;Super expression must either be null or a function&quot;);if(void 0!==r){if(r.has(t))return r.get(t);r.set(t,n)}function n(){return function(t,r,n){if(o())return Reflect.construct.apply(null,arguments);var e=[null];e.push.apply(e,r);var u=new(t.bind.apply(t,e));return n&amp;&amp;i(u,n.prototype),u}(t,arguments,e(this).constructor)}return n.prototype=Object.create(t.prototype,{constructor:{value:n,enumerable:!1,writable:!0,configurable:!0}}),i(n,t)},f(t)}var a=String.prototype.replace,c=/%20/g,l=&quot;RFC3986&quot;,s={default:l,formatters:{RFC1738:function(t){return a.call(t,c,&quot;+&quot;)},RFC3986:function(t){return String(t)}},RFC1738:&quot;RFC1738&quot;,RFC3986:l},v=Object.prototype.hasOwnProperty,p=Array.isArray,y=function(){for(var t=[],r=0;r&lt;256;++r)t.push(&quot;%&quot;+((r&lt;16?&quot;0&quot;:&quot;&quot;)+r.toString(16)).toUpperCase());return t}(),d=function(t,r){for(var n=r&amp;&amp;r.plainObjects?Object.create(null):{},e=0;e&lt;t.length;++e)void 0!==t[e]&amp;&amp;(n[e]=t[e]);return n},b={arrayToObject:d,assign:function(t,r){return Object.keys(r).reduce(function(t,n){return t[n]=r[n],t},t)},combine:function(t,r){return[].concat(t,r)},compact:function(t){for(var r=[{obj:{o:t},prop:&quot;o&quot;}],n=[],e=0;e&lt;r.length;++e)for(var o=r[e],i=o.obj[o.prop],u=Object.keys(i),f=0;f&lt;u.length;++f){var a=u[f],c=i[a];&quot;object&quot;==typeof c&amp;&amp;null!==c&amp;&amp;-1===n.indexOf(c)&amp;&amp;(r.push({obj:i,prop:a}),n.push(c))}return function(t){for(;t.length&gt;1;){var r=t.pop(),n=r.obj[r.prop];if(p(n)){for(var e=[],o=0;o&lt;n.length;++o)void 0!==n[o]&amp;&amp;e.push(n[o]);r.obj[r.prop]=e}}}(r),t},decode:function(t,r,n){var e=t.replace(/\+/g,&quot; &quot;);if(&quot;iso-8859-1&quot;===n)return e.replace(/%[0-9a-f]{2}/gi,unescape);try{return decodeURIComponent(e)}catch(t){return e}},encode:function(t,r,n,e,o){if(0===t.length)return t;var i=t;if(&quot;symbol&quot;==typeof t?i=Symbol.prototype.toString.call(t):&quot;string&quot;!=typeof t&amp;&amp;(i=String(t)),&quot;iso-8859-1&quot;===n)return escape(i).replace(/%u[0-9a-f]{4}/gi,function(t){return&quot;%26%23&quot;+parseInt(t.slice(2),16)+&quot;%3B&quot;});for(var u=&quot;&quot;,f=0;f&lt;i.length;++f){var a=i.charCodeAt(f);45===a||46===a||95===a||126===a||a&gt;=48&amp;&amp;a&lt;=57||a&gt;=65&amp;&amp;a&lt;=90||a&gt;=97&amp;&amp;a&lt;=122||o===s.RFC1738&amp;&amp;(40===a||41===a)?u+=i.charAt(f):a&lt;128?u+=y[a]:a&lt;2048?u+=y[192|a&gt;&gt;6]+y[128|63&amp;a]:a&lt;55296||a&gt;=57344?u+=y[224|a&gt;&gt;12]+y[128|a&gt;&gt;6&amp;63]+y[128|63&amp;a]:(a=65536+((1023&amp;a)&lt;&lt;10|1023&amp;i.charCodeAt(f+=1)),u+=y[240|a&gt;&gt;18]+y[128|a&gt;&gt;12&amp;63]+y[128|a&gt;&gt;6&amp;63]+y[128|63&amp;a])}return u},isBuffer:function(t){return!(!t||&quot;object&quot;!=typeof t||!(t.constructor&amp;&amp;t.constructor.isBuffer&amp;&amp;t.constructor.isBuffer(t)))},isRegExp:function(t){return&quot;[object RegExp]&quot;===Object.prototype.toString.call(t)},maybeMap:function(t,r){if(p(t)){for(var n=[],e=0;e&lt;t.length;e+=1)n.push(r(t[e]));return n}return r(t)},merge:function t(r,n,e){if(!n)return r;if(&quot;object&quot;!=typeof n){if(p(r))r.push(n);else{if(!r||&quot;object&quot;!=typeof r)return[r,n];(e&amp;&amp;(e.plainObjects||e.allowPrototypes)||!v.call(Object.prototype,n))&amp;&amp;(r[n]=!0)}return r}if(!r||&quot;object&quot;!=typeof r)return[r].concat(n);var o=r;return p(r)&amp;&amp;!p(n)&amp;&amp;(o=d(r,e)),p(r)&amp;&amp;p(n)?(n.forEach(function(n,o){if(v.call(r,o)){var i=r[o];i&amp;&amp;&quot;object&quot;==typeof i&amp;&amp;n&amp;&amp;&quot;object&quot;==typeof n?r[o]=t(i,n,e):r.push(n)}else r[o]=n}),r):Object.keys(n).reduce(function(r,o){var i=n[o];return r[o]=v.call(r,o)?t(r[o],i,e):i,r},o)}},h=Object.prototype.hasOwnProperty,g={brackets:function(t){return t+&quot;[]&quot;},comma:&quot;comma&quot;,indices:function(t,r){return t+&quot;[&quot;+r+&quot;]&quot;},repeat:function(t){return t}},m=Array.isArray,j=String.prototype.split,w=Array.prototype.push,O=function(t,r){w.apply(t,m(r)?r:[r])},E=Date.prototype.toISOString,R=s.default,S={addQueryPrefix:!1,allowDots:!1,charset:&quot;utf-8&quot;,charsetSentinel:!1,delimiter:&quot;&amp;&quot;,encode:!0,encoder:b.encode,encodeValuesOnly:!1,format:R,formatter:s.formatters[R],indices:!1,serializeDate:function(t){return E.call(t)},skipNulls:!1,strictNullHandling:!1},k=function t(r,n,e,o,i,u,f,a,c,l,s,v,p,y){var d,h=r;if(&quot;function&quot;==typeof f?h=f(n,h):h instanceof Date?h=l(h):&quot;comma&quot;===e&amp;&amp;m(h)&amp;&amp;(h=b.maybeMap(h,function(t){return t instanceof Date?l(t):t})),null===h){if(o)return u&amp;&amp;!p?u(n,S.encoder,y,&quot;key&quot;,s):n;h=&quot;&quot;}if(&quot;string&quot;==typeof(d=h)||&quot;number&quot;==typeof d||&quot;boolean&quot;==typeof d||&quot;symbol&quot;==typeof d||&quot;bigint&quot;==typeof d||b.isBuffer(h)){if(u){var g=p?n:u(n,S.encoder,y,&quot;key&quot;,s);if(&quot;comma&quot;===e&amp;&amp;p){for(var w=j.call(String(h),&quot;,&quot;),E=&quot;&quot;,R=0;R&lt;w.length;++R)E+=(0===R?&quot;&quot;:&quot;,&quot;)+v(u(w[R],S.encoder,y,&quot;value&quot;,s));return[v(g)+&quot;=&quot;+E]}return[v(g)+&quot;=&quot;+v(u(h,S.encoder,y,&quot;value&quot;,s))]}return[v(n)+&quot;=&quot;+v(String(h))]}var k,T=[];if(void 0===h)return T;if(&quot;comma&quot;===e&amp;&amp;m(h))k=[{value:h.length&gt;0?h.join(&quot;,&quot;)||null:void 0}];else if(m(f))k=f;else{var $=Object.keys(h);k=a?$.sort(a):$}for(var x=0;x&lt;k.length;++x){var N=k[x],C=&quot;object&quot;==typeof N&amp;&amp;void 0!==N.value?N.value:h[N];if(!i||null!==C){var A=m(h)?&quot;function&quot;==typeof e?e(n,N):n:n+(c?&quot;.&quot;+N:&quot;[&quot;+N+&quot;]&quot;);O(T,t(C,A,e,o,i,u,f,a,c,l,s,v,p,y))}}return T},T=Object.prototype.hasOwnProperty,$=Array.isArray,x={allowDots:!1,allowPrototypes:!1,arrayLimit:20,charset:&quot;utf-8&quot;,charsetSentinel:!1,comma:!1,decoder:b.decode,delimiter:&quot;&amp;&quot;,depth:5,ignoreQueryPrefix:!1,interpretNumericEntities:!1,parameterLimit:1e3,parseArrays:!0,plainObjects:!1,strictNullHandling:!1},N=function(t){return t.replace(/&amp;#(\d+);/g,function(t,r){return String.fromCharCode(parseInt(r,10))})},C=function(t,r){return t&amp;&amp;&quot;string&quot;==typeof t&amp;&amp;r.comma&amp;&amp;t.indexOf(&quot;,&quot;)&gt;-1?t.split(&quot;,&quot;):t},A=function(t,r,n,e){if(t){var o=n.allowDots?t.replace(/\.([^.[]+)/g,&quot;[$1]&quot;):t,i=/(\[[^[\]]*])/g,u=n.depth&gt;0&amp;&amp;/(\[[^[\]]*])/.exec(o),f=u?o.slice(0,u.index):o,a=[];if(f){if(!n.plainObjects&amp;&amp;T.call(Object.prototype,f)&amp;&amp;!n.allowPrototypes)return;a.push(f)}for(var c=0;n.depth&gt;0&amp;&amp;null!==(u=i.exec(o))&amp;&amp;c&lt;n.depth;){if(c+=1,!n.plainObjects&amp;&amp;T.call(Object.prototype,u[1].slice(1,-1))&amp;&amp;!n.allowPrototypes)return;a.push(u[1])}return u&amp;&amp;a.push(&quot;[&quot;+o.slice(u.index)+&quot;]&quot;),function(t,r,n,e){for(var o=e?r:C(r,n),i=t.length-1;i&gt;=0;--i){var u,f=t[i];if(&quot;[]&quot;===f&amp;&amp;n.parseArrays)u=[].concat(o);else{u=n.plainObjects?Object.create(null):{};var a=&quot;[&quot;===f.charAt(0)&amp;&amp;&quot;]&quot;===f.charAt(f.length-1)?f.slice(1,-1):f,c=parseInt(a,10);n.parseArrays||&quot;&quot;!==a?!isNaN(c)&amp;&amp;f!==a&amp;&amp;String(c)===a&amp;&amp;c&gt;=0&amp;&amp;n.parseArrays&amp;&amp;c&lt;=n.arrayLimit?(u=[])[c]=o:&quot;__proto__&quot;!==a&amp;&amp;(u[a]=o):u={0:o}}o=u}return o}(a,r,n,e)}},D=function(t,r){var n=function(t){if(!t)return x;if(null!=t.decoder&amp;&amp;&quot;function&quot;!=typeof t.decoder)throw new TypeError(&quot;Decoder has to be a function.&quot;);if(void 0!==t.charset&amp;&amp;&quot;utf-8&quot;!==t.charset&amp;&amp;&quot;iso-8859-1&quot;!==t.charset)throw new TypeError(&quot;The charset option must be either utf-8, iso-8859-1, or undefined&quot;);return{allowDots:void 0===t.allowDots?x.allowDots:!!t.allowDots,allowPrototypes:&quot;boolean&quot;==typeof t.allowPrototypes?t.allowPrototypes:x.allowPrototypes,arrayLimit:&quot;number&quot;==typeof t.arrayLimit?t.arrayLimit:x.arrayLimit,charset:void 0===t.charset?x.charset:t.charset,charsetSentinel:&quot;boolean&quot;==typeof t.charsetSentinel?t.charsetSentinel:x.charsetSentinel,comma:&quot;boolean&quot;==typeof t.comma?t.comma:x.comma,decoder:&quot;function&quot;==typeof t.decoder?t.decoder:x.decoder,delimiter:&quot;string&quot;==typeof t.delimiter||b.isRegExp(t.delimiter)?t.delimiter:x.delimiter,depth:&quot;number&quot;==typeof t.depth||!1===t.depth?+t.depth:x.depth,ignoreQueryPrefix:!0===t.ignoreQueryPrefix,interpretNumericEntities:&quot;boolean&quot;==typeof t.interpretNumericEntities?t.interpretNumericEntities:x.interpretNumericEntities,parameterLimit:&quot;number&quot;==typeof t.parameterLimit?t.parameterLimit:x.parameterLimit,parseArrays:!1!==t.parseArrays,plainObjects:&quot;boolean&quot;==typeof t.plainObjects?t.plainObjects:x.plainObjects,strictNullHandling:&quot;boolean&quot;==typeof t.strictNullHandling?t.strictNullHandling:x.strictNullHandling}}(r);if(&quot;&quot;===t||null==t)return n.plainObjects?Object.create(null):{};for(var e=&quot;string&quot;==typeof t?function(t,r){var n,e={},o=(r.ignoreQueryPrefix?t.replace(/^\?/,&quot;&quot;):t).split(r.delimiter,Infinity===r.parameterLimit?void 0:r.parameterLimit),i=-1,u=r.charset;if(r.charsetSentinel)for(n=0;n&lt;o.length;++n)0===o[n].indexOf(&quot;utf8=&quot;)&amp;&amp;(&quot;utf8=%E2%9C%93&quot;===o[n]?u=&quot;utf-8&quot;:&quot;utf8=%26%2310003%3B&quot;===o[n]&amp;&amp;(u=&quot;iso-8859-1&quot;),i=n,n=o.length);for(n=0;n&lt;o.length;++n)if(n!==i){var f,a,c=o[n],l=c.indexOf(&quot;]=&quot;),s=-1===l?c.indexOf(&quot;=&quot;):l+1;-1===s?(f=r.decoder(c,x.decoder,u,&quot;key&quot;),a=r.strictNullHandling?null:&quot;&quot;):(f=r.decoder(c.slice(0,s),x.decoder,u,&quot;key&quot;),a=b.maybeMap(C(c.slice(s+1),r),function(t){return r.decoder(t,x.decoder,u,&quot;value&quot;)})),a&amp;&amp;r.interpretNumericEntities&amp;&amp;&quot;iso-8859-1&quot;===u&amp;&amp;(a=N(a)),c.indexOf(&quot;[]=&quot;)&gt;-1&amp;&amp;(a=$(a)?[a]:a),e[f]=T.call(e,f)?b.combine(e[f],a):a}return e}(t,n):t,o=n.plainObjects?Object.create(null):{},i=Object.keys(e),u=0;u&lt;i.length;++u){var f=i[u],a=A(f,e[f],n,&quot;string&quot;==typeof t);o=b.merge(o,a,n)}return b.compact(o)},P=/*#__PURE__*/function(){function t(t,r,n){var e,o;this.name=t,this.definition=r,this.bindings=null!=(e=r.bindings)?e:{},this.wheres=null!=(o=r.wheres)?o:{},this.config=n}var n=t.prototype;return n.matchesUrl=function(t){var r,n=this;if(!this.definition.methods.includes(&quot;GET&quot;))return!1;var e=this.template.replace(/[.*+$()[\]]/g,&quot;\\$&amp;&quot;).replace(/(\/?){([^}?]*)(\??)}/g,function(t,r,e,o){var i,u=&quot;(?&lt;&quot;+e+&quot;&gt;&quot;+((null==(i=n.wheres[e])?void 0:i.replace(/(^\^)|(\$$)/g,&quot;&quot;))||&quot;[^/?]+&quot;)+&quot;)&quot;;return o?&quot;(&quot;+r+u+&quot;)?&quot;:&quot;&quot;+r+u}).replace(/^\w+:\/\//,&quot;&quot;),o=t.replace(/^\w+:\/\//,&quot;&quot;).split(&quot;?&quot;),i=o[0],u=o[1],f=null!=(r=new RegExp(&quot;^&quot;+e+&quot;/?$&quot;).exec(i))?r:new RegExp(&quot;^&quot;+e+&quot;/?$&quot;).exec(decodeURI(i));if(f){for(var a in f.groups)f.groups[a]=&quot;string&quot;==typeof f.groups[a]?decodeURIComponent(f.groups[a]):f.groups[a];return{params:f.groups,query:D(u)}}return!1},n.compile=function(t){var r=this;return this.parameterSegments.length?this.template.replace(/{([^}?]+)(\??)}/g,function(n,e,o){var i,u;if(!o&amp;&amp;[null,void 0].includes(t[e]))throw new Error(&quot;Ziggy error: &#039;&quot;+e+&quot;&#039; parameter is required for route &#039;&quot;+r.name+&quot;&#039;.&quot;);if(r.wheres[e]&amp;&amp;!new RegExp(&quot;^&quot;+(o?&quot;(&quot;+r.wheres[e]+&quot;)?&quot;:r.wheres[e])+&quot;$&quot;).test(null!=(u=t[e])?u:&quot;&quot;))throw new Error(&quot;Ziggy error: &#039;&quot;+e+&quot;&#039; parameter &#039;&quot;+t[e]+&quot;&#039; does not match required format &#039;&quot;+r.wheres[e]+&quot;&#039; for route &#039;&quot;+r.name+&quot;&#039;.&quot;);return encodeURI(null!=(i=t[e])?i:&quot;&quot;).replace(/%7C/g,&quot;|&quot;).replace(/%25/g,&quot;%&quot;).replace(/\$/g,&quot;%24&quot;)}).replace(this.config.absolute?/(\.[^/]+?)(\/\/)/:/(^)(\/\/)/,&quot;$1/&quot;).replace(/\/+$/,&quot;&quot;):this.template},r(t,[{key:&quot;template&quot;,get:function(){var t=(this.origin+&quot;/&quot;+this.definition.uri).replace(/\/+$/,&quot;&quot;);return&quot;&quot;===t?&quot;/&quot;:t}},{key:&quot;origin&quot;,get:function(){return this.config.absolute?this.definition.domain?&quot;&quot;+this.config.url.match(/^\w+:\/\//)[0]+this.definition.domain+(this.config.port?&quot;:&quot;+this.config.port:&quot;&quot;):this.config.url:&quot;&quot;}},{key:&quot;parameterSegments&quot;,get:function(){var t,r;return null!=(t=null==(r=this.template.match(/{[^}?]+\??}/g))?void 0:r.map(function(t){return{name:t.replace(/{|\??}/g,&quot;&quot;),required:!/\?}$/.test(t)}}))?t:[]}}])}(),F=/*#__PURE__*/function(t){function e(r,e,o,i){var u;if(void 0===o&amp;&amp;(o=!0),(u=t.call(this)||this).t=null!=i?i:&quot;undefined&quot;!=typeof Ziggy?Ziggy:null==globalThis?void 0:globalThis.Ziggy,u.t=n({},u.t,{absolute:o}),r){if(!u.t.routes[r])throw new Error(&quot;Ziggy error: route &#039;&quot;+r+&quot;&#039; is not in the route list.&quot;);u.i=new P(r,u.t.routes[r],u.t),u.u=u.l(e)}return u}var o,u;u=t,(o=e).prototype=Object.create(u.prototype),o.prototype.constructor=o,i(o,u);var f=e.prototype;return f.toString=function(){var t=this,r=Object.keys(this.u).filter(function(r){return!t.i.parameterSegments.some(function(t){return t.name===r})}).filter(function(t){return&quot;_query&quot;!==t}).reduce(function(r,e){var o;return n({},r,((o={})[e]=t.u[e],o))},{});return this.i.compile(this.u)+function(t,r){var n,e=t,o=function(t){if(!t)return S;if(null!=t.encoder&amp;&amp;&quot;function&quot;!=typeof t.encoder)throw new TypeError(&quot;Encoder has to be a function.&quot;);var r=t.charset||S.charset;if(void 0!==t.charset&amp;&amp;&quot;utf-8&quot;!==t.charset&amp;&amp;&quot;iso-8859-1&quot;!==t.charset)throw new TypeError(&quot;The charset option must be either utf-8, iso-8859-1, or undefined&quot;);var n=s.default;if(void 0!==t.format){if(!h.call(s.formatters,t.format))throw new TypeError(&quot;Unknown format option provided.&quot;);n=t.format}var e=s.formatters[n],o=S.filter;return(&quot;function&quot;==typeof t.filter||m(t.filter))&amp;&amp;(o=t.filter),{addQueryPrefix:&quot;boolean&quot;==typeof t.addQueryPrefix?t.addQueryPrefix:S.addQueryPrefix,allowDots:void 0===t.allowDots?S.allowDots:!!t.allowDots,charset:r,charsetSentinel:&quot;boolean&quot;==typeof t.charsetSentinel?t.charsetSentinel:S.charsetSentinel,delimiter:void 0===t.delimiter?S.delimiter:t.delimiter,encode:&quot;boolean&quot;==typeof t.encode?t.encode:S.encode,encoder:&quot;function&quot;==typeof t.encoder?t.encoder:S.encoder,encodeValuesOnly:&quot;boolean&quot;==typeof t.encodeValuesOnly?t.encodeValuesOnly:S.encodeValuesOnly,filter:o,format:n,formatter:e,serializeDate:&quot;function&quot;==typeof t.serializeDate?t.serializeDate:S.serializeDate,skipNulls:&quot;boolean&quot;==typeof t.skipNulls?t.skipNulls:S.skipNulls,sort:&quot;function&quot;==typeof t.sort?t.sort:null,strictNullHandling:&quot;boolean&quot;==typeof t.strictNullHandling?t.strictNullHandling:S.strictNullHandling}}(r);&quot;function&quot;==typeof o.filter?e=(0,o.filter)(&quot;&quot;,e):m(o.filter)&amp;&amp;(n=o.filter);var i=[];if(&quot;object&quot;!=typeof e||null===e)return&quot;&quot;;var u=g[r&amp;&amp;r.arrayFormat in g?r.arrayFormat:r&amp;&amp;&quot;indices&quot;in r?r.indices?&quot;indices&quot;:&quot;repeat&quot;:&quot;indices&quot;];n||(n=Object.keys(e)),o.sort&amp;&amp;n.sort(o.sort);for(var f=0;f&lt;n.length;++f){var a=n[f];o.skipNulls&amp;&amp;null===e[a]||O(i,k(e[a],a,u,o.strictNullHandling,o.skipNulls,o.encode?o.encoder:null,o.filter,o.sort,o.allowDots,o.serializeDate,o.format,o.formatter,o.encodeValuesOnly,o.charset))}var c=i.join(o.delimiter),l=!0===o.addQueryPrefix?&quot;?&quot;:&quot;&quot;;return o.charsetSentinel&amp;&amp;(l+=&quot;iso-8859-1&quot;===o.charset?&quot;utf8=%26%2310003%3B&amp;&quot;:&quot;utf8=%E2%9C%93&amp;&quot;),c.length&gt;0?l+c:&quot;&quot;}(n({},r,this.u._query),{addQueryPrefix:!0,arrayFormat:&quot;indices&quot;,encodeValuesOnly:!0,skipNulls:!0,encoder:function(t,r){return&quot;boolean&quot;==typeof t?Number(t):r(t)}})},f.v=function(t){var r=this;t?this.t.absolute&amp;&amp;t.startsWith(&quot;/&quot;)&amp;&amp;(t=this.p().host+t):t=this.h();var e={},o=Object.entries(this.t.routes).find(function(n){return e=new P(n[0],n[1],r.t).matchesUrl(t)})||[void 0,void 0];return n({name:o[0]},e,{route:o[1]})},f.h=function(){var t=this.p(),r=t.pathname,n=t.search;return(this.t.absolute?t.host+r:r.replace(this.t.url.replace(/^\w*:\/\/[^/]+/,&quot;&quot;),&quot;&quot;).replace(/^\/+/,&quot;/&quot;))+n},f.current=function(t,r){var e=this.v(),o=e.name,i=e.params,u=e.query,f=e.route;if(!t)return o;var a=new RegExp(&quot;^&quot;+t.replace(/\./g,&quot;\\.&quot;).replace(/\*/g,&quot;.*&quot;)+&quot;$&quot;).test(o);if([null,void 0].includes(r)||!a)return a;var c=new P(o,f,this.t);r=this.l(r,c);var l=n({},i,u);if(Object.values(r).every(function(t){return!t})&amp;&amp;!Object.values(l).some(function(t){return void 0!==t}))return!0;var s=function(t,r){return Object.entries(t).every(function(t){var n=t[0],e=t[1];return Array.isArray(e)&amp;&amp;Array.isArray(r[n])?e.every(function(t){return r[n].includes(t)}):&quot;object&quot;==typeof e&amp;&amp;&quot;object&quot;==typeof r[n]&amp;&amp;null!==e&amp;&amp;null!==r[n]?s(e,r[n]):r[n]==e})};return s(r,l)},f.p=function(){var t,r,n,e,o,i,u=&quot;undefined&quot;!=typeof window?window.location:{},f=u.host,a=u.pathname,c=u.search;return{host:null!=(t=null==(r=this.t.location)?void 0:r.host)?t:void 0===f?&quot;&quot;:f,pathname:null!=(n=null==(e=this.t.location)?void 0:e.pathname)?n:void 0===a?&quot;&quot;:a,search:null!=(o=null==(i=this.t.location)?void 0:i.search)?o:void 0===c?&quot;&quot;:c}},f.has=function(t){return this.t.routes.hasOwnProperty(t)},f.l=function(t,r){var e=this;void 0===t&amp;&amp;(t={}),void 0===r&amp;&amp;(r=this.i),null!=t||(t={}),t=[&quot;string&quot;,&quot;number&quot;].includes(typeof t)?[t]:t;var o=r.parameterSegments.filter(function(t){return!e.t.defaults[t.name]});if(Array.isArray(t))t=t.reduce(function(t,r,e){var i,u;return n({},t,o[e]?((i={})[o[e].name]=r,i):&quot;object&quot;==typeof r?r:((u={})[r]=&quot;&quot;,u))},{});else if(1===o.length&amp;&amp;!t[o[0].name]&amp;&amp;(t.hasOwnProperty(Object.values(r.bindings)[0])||t.hasOwnProperty(&quot;id&quot;))){var i;(i={})[o[0].name]=t,t=i}return n({},this.m(r),this.j(t,r))},f.m=function(t){var r=this;return t.parameterSegments.filter(function(t){return r.t.defaults[t.name]}).reduce(function(t,e,o){var i,u=e.name;return n({},t,((i={})[u]=r.t.defaults[u],i))},{})},f.j=function(t,r){var e=r.bindings,o=r.parameterSegments;return Object.entries(t).reduce(function(t,r){var i,u,f=r[0],a=r[1];if(!a||&quot;object&quot;!=typeof a||Array.isArray(a)||!o.some(function(t){return t.name===f}))return n({},t,((u={})[f]=a,u));if(!a.hasOwnProperty(e[f])){if(!a.hasOwnProperty(&quot;id&quot;))throw new Error(&quot;Ziggy error: object passed as &#039;&quot;+f+&quot;&#039; parameter is missing route model binding key &#039;&quot;+e[f]+&quot;&#039;.&quot;);e[f]=&quot;id&quot;}return n({},t,((i={})[f]=a[e[f]],i))},{})},f.valueOf=function(){return this.toString()},r(e,[{key:&quot;params&quot;,get:function(){var t=this.v();return n({},t.params,t.query)}},{key:&quot;routeParams&quot;,get:function(){return this.v().params}},{key:&quot;queryParams&quot;,get:function(){return this.v().query}}])}(/*#__PURE__*/f(String));return function(t,r,n,e){var o=new F(t,r,n,e);return t?o.toString():o}});
&lt;/script&gt;        &lt;script type=&quot;module&quot; &gt;
    import RefreshRuntime from &#039;http://[::1]:5173/@react-refresh&#039;
    RefreshRuntime.injectIntoGlobalHook(window)
    window.$RefreshReg$ = () =&gt; {}
    window.$RefreshSig$ = () =&gt; (type) =&gt; type
    window.__vite_plugin_react_preamble_installed__ = true
&lt;/script&gt;        &lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/@vite/client&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/app.tsx&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/pages/auth/register.tsx&quot;&gt;&lt;/script&gt;            &lt;/head&gt;
    &lt;body class=&quot;font-sans antialiased&quot;&gt;
        &lt;div id=&quot;app&quot; data-page=&quot;{&amp;quot;component&amp;quot;:&amp;quot;auth\/register&amp;quot;,&amp;quot;props&amp;quot;:{&amp;quot;errors&amp;quot;:{},&amp;quot;name&amp;quot;:&amp;quot;Laravel&amp;quot;,&amp;quot;quote&amp;quot;:{&amp;quot;message&amp;quot;:&amp;quot;When there is no desire, all things are at peace.&amp;quot;,&amp;quot;author&amp;quot;:&amp;quot;Laozi&amp;quot;},&amp;quot;auth&amp;quot;:{&amp;quot;user&amp;quot;:null}},&amp;quot;url&amp;quot;:&amp;quot;\/register&amp;quot;,&amp;quot;version&amp;quot;:&amp;quot;189daf94ac58d6f2fdd626f910c64328&amp;quot;,&amp;quot;clearHistory&amp;quot;:false,&amp;quot;encryptHistory&amp;quot;:false}&quot;&gt;&lt;/div&gt;    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
            </span>
            <span id="execution-results-GETregister" hidden>
                <blockquote>Received response<span id="execution-response-status-GETregister"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETregister"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETregister" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETregister">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETregister" data-method="GET" data-path="register" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETregister" onclick="tryItOut('GETregister');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETregister" onclick="cancelTryOut('GETregister');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETregister" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>register</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETregister"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETregister"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTregister">Handle an incoming registration request.</h2>

            <p>
            </p>



            <span id="example-requests-POSTregister">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"password\": \"architecto\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTregister">
            </span>
            <span id="execution-results-POSTregister" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTregister"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTregister"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTregister" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTregister">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTregister" data-method="POST" data-path="register" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTregister" onclick="tryItOut('POSTregister');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTregister" onclick="cancelTryOut('POSTregister');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTregister" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>register</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTregister"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTregister"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="name" data-endpoint="POSTregister" value="b"
                        data-component="body">
                    <br>
                    <p>Must not be greater than 255 characters. Example: <code>b</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="email" data-endpoint="POSTregister" value=""
                        data-component="body">
                    <br>

                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="POSTregister"
                        value="architecto" data-component="body">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETlogin">Show the login page.</h2>

            <p>
            </p>



            <span id="example-requests-GETlogin">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETlogin">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: X-Inertia
set-cookie: XSRF-TOKEN=eyJpdiI6IjVmUDhLVzdxNkltQ3hjK0p0VjBHYlE9PSIsInZhbHVlIjoiWmJobGk0VTRYVG1nUVBiUWVxcGlabjFURjF0bWdjQzY4amlFMDZSK1ZVTFdrYXh3bHVTV3dlRUF5R1A3OWEyQ2t0cFdsN2haUVFSK3dxT1pmYXVsRlpSaDB4SUxHZGExendKY0FCTXVIZ0JEREl5MC8yUStvNzRqM1V0VDBtMFIiLCJtYWMiOiJkYmE1NWQyMjE2NzU3ZGIzZmY4MmIyZTMyZTkwNTkxMTI3NGRlYjEzYTdmM2JhNDAwMTc4MWIwMjdlZTNiZTk4IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InBBckJPU2QwcFhPZnkxUHd6WGtXWFE9PSIsInZhbHVlIjoiYW1lLzNIYlhOajRpSHlYTmhsbDJlVGkxV2hQbDdZdDNxVHpzbWdKd1NnZHg0cmtWYW51cUdjck1GZTQ1aDhXa09lbTdMc0RHTG5mQ0RRb3lFZmVIUlhlMXVtNkp3bC9kTVhnbERBRFRUSTYwWDhJRXRYK1VHaUN6d25RdmkrdjAiLCJtYWMiOiIzNDIxNzY1YWU3OTE0MDA1ZGU4NzNhOWNiNDBhZTI0MDYyZWI1ZTMzMzU0N2ZkNzQ5YjAyNDgyODU5YjQ5MjBjIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title inertia&gt;Laravel&lt;/title&gt;

        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=instrument-sans:400,500,600&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;script type=&quot;text/javascript&quot;&gt;Object.assign(Ziggy.routes,{&quot;scribe&quot;:{&quot;uri&quot;:&quot;docs&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.postman&quot;:{&quot;uri&quot;:&quot;docs.postman&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.openapi&quot;:{&quot;uri&quot;:&quot;docs.openapi&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token&quot;:{&quot;uri&quot;:&quot;oauth\/token&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.authorize&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token.refresh&quot;:{&quot;uri&quot;:&quot;oauth\/token\/refresh&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.approve&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.deny&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;passport.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;passport.clients.index&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.clients.store&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.clients.update&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;PUT&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.clients.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.scopes.index&quot;:{&quot;uri&quot;:&quot;oauth\/scopes&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.store&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.personal.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;dashboard&quot;:{&quot;uri&quot;:&quot;dashboard&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.edit&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.update&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;PATCH&quot;]},&quot;profile.destroy&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;password.edit&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.update&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;PUT&quot;]},&quot;appearance&quot;:{&quot;uri&quot;:&quot;settings\/appearance&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;register&quot;:{&quot;uri&quot;:&quot;register&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;login&quot;:{&quot;uri&quot;:&quot;login&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.request&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.email&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.reset&quot;:{&quot;uri&quot;:&quot;reset-password\/{token}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;token&quot;]},&quot;password.store&quot;:{&quot;uri&quot;:&quot;reset-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;verification.notice&quot;:{&quot;uri&quot;:&quot;verify-email&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;verification.verify&quot;:{&quot;uri&quot;:&quot;verify-email\/{id}\/{hash}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;id&quot;,&quot;hash&quot;]},&quot;verification.send&quot;:{&quot;uri&quot;:&quot;email\/verification-notification&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.confirm&quot;:{&quot;uri&quot;:&quot;confirm-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;logout&quot;:{&quot;uri&quot;:&quot;logout&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;storage.local&quot;:{&quot;uri&quot;:&quot;storage\/{path}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;wheres&quot;:{&quot;path&quot;:&quot;.*&quot;},&quot;parameters&quot;:[&quot;path&quot;]}});&lt;/script&gt;        &lt;script type=&quot;module&quot; &gt;
    import RefreshRuntime from &#039;http://[::1]:5173/@react-refresh&#039;
    RefreshRuntime.injectIntoGlobalHook(window)
    window.$RefreshReg$ = () =&gt; {}
    window.$RefreshSig$ = () =&gt; (type) =&gt; type
    window.__vite_plugin_react_preamble_installed__ = true
&lt;/script&gt;        &lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/@vite/client&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/app.tsx&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/pages/auth/login.tsx&quot;&gt;&lt;/script&gt;            &lt;/head&gt;
    &lt;body class=&quot;font-sans antialiased&quot;&gt;
        &lt;div id=&quot;app&quot; data-page=&quot;{&amp;quot;component&amp;quot;:&amp;quot;auth\/login&amp;quot;,&amp;quot;props&amp;quot;:{&amp;quot;errors&amp;quot;:{},&amp;quot;name&amp;quot;:&amp;quot;Laravel&amp;quot;,&amp;quot;quote&amp;quot;:{&amp;quot;message&amp;quot;:&amp;quot;Order your soul. Reduce your wants.&amp;quot;,&amp;quot;author&amp;quot;:&amp;quot;Augustine&amp;quot;},&amp;quot;auth&amp;quot;:{&amp;quot;user&amp;quot;:null},&amp;quot;canResetPassword&amp;quot;:true,&amp;quot;status&amp;quot;:null},&amp;quot;url&amp;quot;:&amp;quot;\/login&amp;quot;,&amp;quot;version&amp;quot;:&amp;quot;189daf94ac58d6f2fdd626f910c64328&amp;quot;,&amp;quot;clearHistory&amp;quot;:false,&amp;quot;encryptHistory&amp;quot;:false}&quot;&gt;&lt;/div&gt;    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
            </span>
            <span id="execution-results-GETlogin" hidden>
                <blockquote>Received response<span id="execution-response-status-GETlogin"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETlogin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETlogin" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETlogin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETlogin" data-method="GET" data-path="login" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETlogin" onclick="tryItOut('GETlogin');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETlogin" onclick="cancelTryOut('GETlogin');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETlogin" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>login</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETlogin"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETlogin"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTlogin">Handle an incoming authentication request.</h2>

            <p>
            </p>



            <span id="example-requests-POSTlogin">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"|]|{+-\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "|]|{+-"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTlogin">
            </span>
            <span id="execution-results-POSTlogin" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTlogin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTlogin" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTlogin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTlogin" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>login</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTlogin"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTlogin"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="email" data-endpoint="POSTlogin"
                        value="gbailey@example.net" data-component="body">
                    <br>
                    <p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="POSTlogin" value="|]|{+-"
                        data-component="body">
                    <br>
                    <p>Example: <code>|]|{+-</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETforgot-password">Show the password reset link request page.</h2>

            <p>
            </p>



            <span id="example-requests-GETforgot-password">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETforgot-password">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: X-Inertia
set-cookie: XSRF-TOKEN=eyJpdiI6IlUxTllXa2tBUlV5RzdpMXYwWGsyNWc9PSIsInZhbHVlIjoiOVpZdUk5SDlmblNFaEU5RGVLMVlKcVdTNkhuUk4xTDArV1BwRHUwUG1SdU9mazB0TjJRd3Q1VGVCWmVHaUs0WVVIYkEwT000SXNGNFpGcCtCb1ZLSFJpU1BuV3BhM05SL0c0OWRlOURmWUJkblNLUjArSFJYakc2VmRIOWg5RWciLCJtYWMiOiIzNzc4ZjZlY2FiZTlmMDgxNmZhNTc0ZGJkYzVmZDcxNTIzMmQ1N2ZlNzA5MTZiZGQ1N2NiMWRhMjg5YThiMjUxIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImNUOTRjVEF3T09zdlM3R0pQL0p4SlE9PSIsInZhbHVlIjoiQ3hBaG0xVnNoSUEzMlY0ZWh1cnF6bmRMMkpCV2taY2RNSWdYQ3Mwc3FyYXhUVU9LSWJ0RWdBbk9Sd25lbHo3WkUrMEd6QXJ1ZTVWSDZGSk1RSWdWb09qVGl6c2VhTktnb0poaEVtdFU0UU5uT3RTT0FpbnJqWkxaZkJJVTl1YnEiLCJtYWMiOiI4OThlZTI5ODhjY2U5OWI0NmJiYThkMmYxZDQ4N2U0NTQ3YTNkMGMyMjUwOGNkOWVjN2EzMTIzOWU1NDIzMzEzIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title inertia&gt;Laravel&lt;/title&gt;

        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=instrument-sans:400,500,600&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;script type=&quot;text/javascript&quot;&gt;Object.assign(Ziggy.routes,{&quot;scribe&quot;:{&quot;uri&quot;:&quot;docs&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.postman&quot;:{&quot;uri&quot;:&quot;docs.postman&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.openapi&quot;:{&quot;uri&quot;:&quot;docs.openapi&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token&quot;:{&quot;uri&quot;:&quot;oauth\/token&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.authorize&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token.refresh&quot;:{&quot;uri&quot;:&quot;oauth\/token\/refresh&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.approve&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.deny&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;passport.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;passport.clients.index&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.clients.store&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.clients.update&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;PUT&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.clients.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.scopes.index&quot;:{&quot;uri&quot;:&quot;oauth\/scopes&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.store&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.personal.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;dashboard&quot;:{&quot;uri&quot;:&quot;dashboard&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.edit&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.update&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;PATCH&quot;]},&quot;profile.destroy&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;password.edit&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.update&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;PUT&quot;]},&quot;appearance&quot;:{&quot;uri&quot;:&quot;settings\/appearance&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;register&quot;:{&quot;uri&quot;:&quot;register&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;login&quot;:{&quot;uri&quot;:&quot;login&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.request&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.email&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.reset&quot;:{&quot;uri&quot;:&quot;reset-password\/{token}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;token&quot;]},&quot;password.store&quot;:{&quot;uri&quot;:&quot;reset-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;verification.notice&quot;:{&quot;uri&quot;:&quot;verify-email&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;verification.verify&quot;:{&quot;uri&quot;:&quot;verify-email\/{id}\/{hash}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;id&quot;,&quot;hash&quot;]},&quot;verification.send&quot;:{&quot;uri&quot;:&quot;email\/verification-notification&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.confirm&quot;:{&quot;uri&quot;:&quot;confirm-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;logout&quot;:{&quot;uri&quot;:&quot;logout&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;storage.local&quot;:{&quot;uri&quot;:&quot;storage\/{path}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;wheres&quot;:{&quot;path&quot;:&quot;.*&quot;},&quot;parameters&quot;:[&quot;path&quot;]}});&lt;/script&gt;        &lt;script type=&quot;module&quot; &gt;
    import RefreshRuntime from &#039;http://[::1]:5173/@react-refresh&#039;
    RefreshRuntime.injectIntoGlobalHook(window)
    window.$RefreshReg$ = () =&gt; {}
    window.$RefreshSig$ = () =&gt; (type) =&gt; type
    window.__vite_plugin_react_preamble_installed__ = true
&lt;/script&gt;        &lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/@vite/client&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/app.tsx&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/pages/auth/forgot-password.tsx&quot;&gt;&lt;/script&gt;            &lt;/head&gt;
    &lt;body class=&quot;font-sans antialiased&quot;&gt;
        &lt;div id=&quot;app&quot; data-page=&quot;{&amp;quot;component&amp;quot;:&amp;quot;auth\/forgot-password&amp;quot;,&amp;quot;props&amp;quot;:{&amp;quot;errors&amp;quot;:{},&amp;quot;name&amp;quot;:&amp;quot;Laravel&amp;quot;,&amp;quot;quote&amp;quot;:{&amp;quot;message&amp;quot;:&amp;quot;You must be the change you wish to see in the world.&amp;quot;,&amp;quot;author&amp;quot;:&amp;quot;Mahatma Gandhi&amp;quot;},&amp;quot;auth&amp;quot;:{&amp;quot;user&amp;quot;:null},&amp;quot;status&amp;quot;:null},&amp;quot;url&amp;quot;:&amp;quot;\/forgot-password&amp;quot;,&amp;quot;version&amp;quot;:&amp;quot;189daf94ac58d6f2fdd626f910c64328&amp;quot;,&amp;quot;clearHistory&amp;quot;:false,&amp;quot;encryptHistory&amp;quot;:false}&quot;&gt;&lt;/div&gt;    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
            </span>
            <span id="execution-results-GETforgot-password" hidden>
                <blockquote>Received response<span id="execution-response-status-GETforgot-password"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETforgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETforgot-password" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETforgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETforgot-password" data-method="GET" data-path="forgot-password" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETforgot-password', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETforgot-password" onclick="tryItOut('GETforgot-password');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETforgot-password" onclick="cancelTryOut('GETforgot-password');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETforgot-password" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>forgot-password</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETforgot-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETforgot-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTforgot-password">Handle an incoming password reset link request.</h2>

            <p>
            </p>



            <span id="example-requests-POSTforgot-password">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTforgot-password">
            </span>
            <span id="execution-results-POSTforgot-password" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTforgot-password"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTforgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTforgot-password" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTforgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTforgot-password" data-method="POST" data-path="forgot-password" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTforgot-password', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTforgot-password" onclick="tryItOut('POSTforgot-password');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTforgot-password" onclick="cancelTryOut('POSTforgot-password');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTforgot-password" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>forgot-password</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTforgot-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTforgot-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="email" data-endpoint="POSTforgot-password"
                        value="gbailey@example.net" data-component="body">
                    <br>
                    <p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETreset-password--token-">Show the password reset page.</h2>

            <p>
            </p>



            <span id="example-requests-GETreset-password--token-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/reset-password/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/reset-password/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETreset-password--token-">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: X-Inertia
set-cookie: XSRF-TOKEN=eyJpdiI6ImdFR01QdHhZOTI1bG9GRWo5YWJxbHc9PSIsInZhbHVlIjoiSDBHS1dIZG84aVlMNmVod2lCQWg2SFk4QUFOY3hvZzExcVVxcHdLT2Y2SkJ4eGVYcGxGUnRIT0JqWWh0SDFoc1lNb2JGcmhNU2IzL2lMeTFBWUV5Nko4Z01vZzhmd3pheWdEblZrRWRTMm04YzlZZU1vQkMwY0dUSi9uN2ZkVy8iLCJtYWMiOiI2M2FjNTc3MjQ5MTYwNzc4YjU2YzU5NDA3NmEzNjg3NzkzYzNlMjdhZWJiNjY2NDFjYzcwMzE3YTk5NjFhOTZhIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InJ0NnB3TWZXOHlJUzkrZC9hMTFDTmc9PSIsInZhbHVlIjoiU0NtUlVyY3k2V25UOGg0S1VMWEZFZC9YeHhPbGJkY1FjNlN5Nk9EcVhQTjdybThKMnQwcThoYXpGaHh4cHJEcEJKUjc4SlJtTnVtV2duVnBMWS9pbVdpSVQ4NUlDVVNnUC82dHpuRk5VMmkrUXluNVRVcHBUYmw2bS8vUHdPdWsiLCJtYWMiOiI0MTk4NWVjYzc2YWE3MDQyY2JlZWMxNjY1YjQwYzI2MTg1ZTBjZjFmZjMwYWE0ZDQzZTljZmJlMmU0YWQ1ODE5IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title inertia&gt;Laravel&lt;/title&gt;

        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=instrument-sans:400,500,600&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;script type=&quot;text/javascript&quot;&gt;Object.assign(Ziggy.routes,{&quot;scribe&quot;:{&quot;uri&quot;:&quot;docs&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.postman&quot;:{&quot;uri&quot;:&quot;docs.postman&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;scribe.openapi&quot;:{&quot;uri&quot;:&quot;docs.openapi&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token&quot;:{&quot;uri&quot;:&quot;oauth\/token&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.authorize&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.token.refresh&quot;:{&quot;uri&quot;:&quot;oauth\/token\/refresh&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.approve&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.authorizations.deny&quot;:{&quot;uri&quot;:&quot;oauth\/authorize&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;passport.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;passport.clients.index&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.clients.store&quot;:{&quot;uri&quot;:&quot;oauth\/clients&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.clients.update&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;PUT&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.clients.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/clients\/{client_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;client_id&quot;]},&quot;passport.scopes.index&quot;:{&quot;uri&quot;:&quot;oauth\/scopes&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.index&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;passport.personal.tokens.store&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;passport.personal.tokens.destroy&quot;:{&quot;uri&quot;:&quot;oauth\/personal-access-tokens\/{token_id}&quot;,&quot;methods&quot;:[&quot;DELETE&quot;],&quot;parameters&quot;:[&quot;token_id&quot;]},&quot;dashboard&quot;:{&quot;uri&quot;:&quot;dashboard&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.edit&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;profile.update&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;PATCH&quot;]},&quot;profile.destroy&quot;:{&quot;uri&quot;:&quot;settings\/profile&quot;,&quot;methods&quot;:[&quot;DELETE&quot;]},&quot;password.edit&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.update&quot;:{&quot;uri&quot;:&quot;settings\/password&quot;,&quot;methods&quot;:[&quot;PUT&quot;]},&quot;appearance&quot;:{&quot;uri&quot;:&quot;settings\/appearance&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;register&quot;:{&quot;uri&quot;:&quot;register&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;login&quot;:{&quot;uri&quot;:&quot;login&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.request&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;password.email&quot;:{&quot;uri&quot;:&quot;forgot-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.reset&quot;:{&quot;uri&quot;:&quot;reset-password\/{token}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;token&quot;]},&quot;password.store&quot;:{&quot;uri&quot;:&quot;reset-password&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;verification.notice&quot;:{&quot;uri&quot;:&quot;verify-email&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;verification.verify&quot;:{&quot;uri&quot;:&quot;verify-email\/{id}\/{hash}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;parameters&quot;:[&quot;id&quot;,&quot;hash&quot;]},&quot;verification.send&quot;:{&quot;uri&quot;:&quot;email\/verification-notification&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;password.confirm&quot;:{&quot;uri&quot;:&quot;confirm-password&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;]},&quot;logout&quot;:{&quot;uri&quot;:&quot;logout&quot;,&quot;methods&quot;:[&quot;POST&quot;]},&quot;storage.local&quot;:{&quot;uri&quot;:&quot;storage\/{path}&quot;,&quot;methods&quot;:[&quot;GET&quot;,&quot;HEAD&quot;],&quot;wheres&quot;:{&quot;path&quot;:&quot;.*&quot;},&quot;parameters&quot;:[&quot;path&quot;]}});&lt;/script&gt;        &lt;script type=&quot;module&quot; &gt;
    import RefreshRuntime from &#039;http://[::1]:5173/@react-refresh&#039;
    RefreshRuntime.injectIntoGlobalHook(window)
    window.$RefreshReg$ = () =&gt; {}
    window.$RefreshSig$ = () =&gt; (type) =&gt; type
    window.__vite_plugin_react_preamble_installed__ = true
&lt;/script&gt;        &lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/@vite/client&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/app.tsx&quot;&gt;&lt;/script&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/pages/auth/reset-password.tsx&quot;&gt;&lt;/script&gt;            &lt;/head&gt;
    &lt;body class=&quot;font-sans antialiased&quot;&gt;
        &lt;div id=&quot;app&quot; data-page=&quot;{&amp;quot;component&amp;quot;:&amp;quot;auth\/reset-password&amp;quot;,&amp;quot;props&amp;quot;:{&amp;quot;errors&amp;quot;:{},&amp;quot;name&amp;quot;:&amp;quot;Laravel&amp;quot;,&amp;quot;quote&amp;quot;:{&amp;quot;message&amp;quot;:&amp;quot;The best way to take care of the future is to take care of the present moment.&amp;quot;,&amp;quot;author&amp;quot;:&amp;quot;Thich Nhat Hanh&amp;quot;},&amp;quot;auth&amp;quot;:{&amp;quot;user&amp;quot;:null},&amp;quot;email&amp;quot;:null,&amp;quot;token&amp;quot;:&amp;quot;architecto&amp;quot;},&amp;quot;url&amp;quot;:&amp;quot;\/reset-password\/architecto&amp;quot;,&amp;quot;version&amp;quot;:&amp;quot;189daf94ac58d6f2fdd626f910c64328&amp;quot;,&amp;quot;clearHistory&amp;quot;:false,&amp;quot;encryptHistory&amp;quot;:false}&quot;&gt;&lt;/div&gt;    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
            </span>
            <span id="execution-results-GETreset-password--token-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETreset-password--token-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETreset-password--token-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETreset-password--token-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETreset-password--token-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETreset-password--token-" data-method="GET" data-path="reset-password/{token}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETreset-password--token-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETreset-password--token-" onclick="tryItOut('GETreset-password--token-');">Try
                        it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETreset-password--token-"
                        onclick="cancelTryOut('GETreset-password--token-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETreset-password--token-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>reset-password/{token}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETreset-password--token-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETreset-password--token-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="token" data-endpoint="GETreset-password--token-"
                        value="architecto" data-component="url">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTreset-password">Handle an incoming new password request.</h2>

            <p>
            </p>



            <span id="example-requests-POSTreset-password">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"architecto\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "architecto",
    "email": "zbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTreset-password">
            </span>
            <span id="execution-results-POSTreset-password" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTreset-password"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTreset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTreset-password" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTreset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTreset-password" data-method="POST" data-path="reset-password" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTreset-password', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTreset-password" onclick="tryItOut('POSTreset-password');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTreset-password" onclick="cancelTryOut('POSTreset-password');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTreset-password" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>reset-password</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTreset-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTreset-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="token" data-endpoint="POSTreset-password"
                        value="architecto" data-component="body">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="email" data-endpoint="POSTreset-password"
                        value="zbailey@example.net" data-component="body">
                    <br>
                    <p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="POSTreset-password"
                        value="architecto" data-component="body">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETverify-email">Show the email verification prompt page.</h2>

            <p>
            </p>



            <span id="example-requests-GETverify-email">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/verify-email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/verify-email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETverify-email">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjNYNkQ4SWc2RkZDVklQRHNVdmZKdEE9PSIsInZhbHVlIjoiTlpNU3lEcXd2NHRjZE51Qk1MYThmaE9IVElOZ1VVT0hVVWdXNS9hd3BPUEJnWGk2LzYxLzVaRGxKNUFvWHh3Q2cyMHhLakxaU295Sm1peWN1ZXVSTGJIRTVmQ0JPNnNBeTNBaW1TbjBBZEFnQlVZSDZXcUN0Tk9Bc3Q5RzNiVlEiLCJtYWMiOiIzM2ZmZDM3YzM2ODI5ZDc1OTQwMGJjOGYwMDI1MzIyNzEyNDU5OGRkOWRkMTM2NTk0Yzc3NmU4MmY0YjM4ZTdiIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImRWcHdQcnJRNG5pWXhOU1p5Nkw4eFE9PSIsInZhbHVlIjoiM01GMnUyMFJaR3VUaTR6M2ZwM0QwLzRCY2tVVXpjemZvT0JSa1M5QVMxWkgyMktha0RxdTE5YWxQbWJ6OGZ5REdsY240QW0vZ3pDclNpcURwODc5TkJLVzI0QWhXZDZwdEt6QjV0WUoyd3liTFBzSFJEZlZXb0xtbnNsY2JQY3oiLCJtYWMiOiJjOTUzMTNmZjhhNzdiMzIxNDA3NDQ5N2EyN2U4ZjMyNDM1YjU3NzI0MzAxYzFhMWYxZTliN2MyM2I1YTUwODRhIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETverify-email" hidden>
                <blockquote>Received response<span id="execution-response-status-GETverify-email"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETverify-email"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETverify-email" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETverify-email">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETverify-email" data-method="GET" data-path="verify-email" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETverify-email', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETverify-email" onclick="tryItOut('GETverify-email');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETverify-email" onclick="cancelTryOut('GETverify-email');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETverify-email" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>verify-email</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETverify-email"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETverify-email"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETverify-email--id---hash-">Mark the authenticated user&#039;s email address as verified.
            </h2>

            <p>
            </p>



            <span id="example-requests-GETverify-email--id---hash-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/verify-email/architecto/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/verify-email/architecto/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETverify-email--id---hash-">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IlY3QTVYR2kraGs3NUFWY1JPYnVNRlE9PSIsInZhbHVlIjoidnM1NEltS1JRQjRzeHJoQTVWditCTWNhVXNxSUsyLzhWSzdGOXRid2M5SmJhM3RRNkpPY0N5THJScTlOYUNxTUpvemxwRlNSWWtuOXBCVnJnK0ZYSzBOQ1ZlQXBEQVF1b1c4aG1oTjZJSytnd0hBMjYwN2VQdFNadFk3RDdtR0UiLCJtYWMiOiJhMmNjMDdlMWY4NzY4NzFmOGRmNjAyMzA5Y2I5MjI4MGYxZWMxM2FjZjg5ZDA4ZTM2NGNjODFlM2I3ZTI3MWU2IiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Ikd6L2syRHdZRVF3YTl2TVErdGprK0E9PSIsInZhbHVlIjoidFhBSklUVGlWNmRKNWNNek1SNkNMT3E0eXdSVXp1anJGcjFvYkd6M0c0RGdCZVVOSkZzOHlGSmpyMVk1QnFDb3o0a2VJeG0xSGtRQnJVM2YxVTJiYUExRXNsL1NGaGhaM0d5ZXRWZnpKdWNGYThQNTkvT3p5cEROUTgyMDZHNlEiLCJtYWMiOiIyZDI1Mjg1ZDljNzc5MzI5NDk4M2YwN2ViMjc4NjgwZWMwNzEyZGI5MWYyOTRhYzg1YzY1NDgyM2RlMGNjYjFiIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETverify-email--id---hash-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETverify-email--id---hash-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETverify-email--id---hash-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETverify-email--id---hash-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETverify-email--id---hash-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETverify-email--id---hash-" data-method="GET" data-path="verify-email/{id}/{hash}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETverify-email--id---hash-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETverify-email--id---hash-"
                        onclick="tryItOut('GETverify-email--id---hash-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETverify-email--id---hash-"
                        onclick="cancelTryOut('GETverify-email--id---hash-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETverify-email--id---hash-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>verify-email/{id}/{hash}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETverify-email--id---hash-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETverify-email--id---hash-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="id" data-endpoint="GETverify-email--id---hash-"
                        value="architecto" data-component="url">
                    <br>
                    <p>The ID of the verify email. Example: <code>architecto</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>hash</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="hash" data-endpoint="GETverify-email--id---hash-"
                        value="architecto" data-component="url">
                    <br>
                    <p>Example: <code>architecto</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTemail-verification-notification">Send a new email verification notification.</h2>

            <p>
            </p>



            <span id="example-requests-POSTemail-verification-notification">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/email/verification-notification" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/email/verification-notification"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTemail-verification-notification">
            </span>
            <span id="execution-results-POSTemail-verification-notification" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-POSTemail-verification-notification"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTemail-verification-notification"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTemail-verification-notification" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTemail-verification-notification">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTemail-verification-notification" data-method="POST"
                data-path="email/verification-notification" data-authed="0" data-hasfiles="0" data-isarraybody="0"
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTemail-verification-notification', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTemail-verification-notification"
                        onclick="tryItOut('POSTemail-verification-notification');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTemail-verification-notification"
                        onclick="cancelTryOut('POSTemail-verification-notification');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTemail-verification-notification" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>email/verification-notification</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTemail-verification-notification" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="POSTemail-verification-notification" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETconfirm-password">Show the confirm password page.</h2>

            <p>
            </p>



            <span id="example-requests-GETconfirm-password">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/confirm-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/confirm-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETconfirm-password">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6Ikx4MEhNaFA2cEloT05rVjZsREpLWEE9PSIsInZhbHVlIjoiVXMrL3ByVzVvdzRyeHhISk1ua2MraGpER3YxMHd2QUlKc0VXeG9IK1ZmQ2NmTlR3WTBybGJtRFl2dWtOdEl2a2lNVVNQVGNvUGo1MUQvYnhpOG5TaWtscklnT3plY3lpa1hoRitTR1BqREtJUXRGajUwNm9HK0FaT3c2SThLc3giLCJtYWMiOiJhMDgxZWRiMjI2ZmY3ZGM0ZWM1YzBiY2JlMzRhYWViOWU1ZGFmODk3OGM0ZDA2OWQ2ZDg0YzZlYWRlYzliZDUwIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImdzL2ZLYldGSG04RkdWQ2gvRHFRRWc9PSIsInZhbHVlIjoiQzZpd2IyMVFyYkhsZlJQYkhsc1E0QnBSUjA0NHAwbDZaQ2lzSnA3VGRVdDFHRnQ5VXA0aUxraTNrOUJ0VjZQZE9mRVZYRzFnSHhpcXVhT2NRN2lLSTUxb2J6aGVQU3ZmUk5ZSGw3RzJIZjJkZFBiYzBDbzFuOEJVeHBCYzJINDgiLCJtYWMiOiJjNjhmMGM0ZmZiYzYxZWZjZjkwZTNiMjFkNTkxOWU3ZDQ2ZmVhMzY0YTMxMzg3ODQ4M2Y2ZWE2ODUwOWI2NjczIiwidGFnIjoiIn0%3D; expires=Thu, 06 Mar 2025 03:25:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETconfirm-password" hidden>
                <blockquote>Received response<span id="execution-response-status-GETconfirm-password"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETconfirm-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETconfirm-password" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETconfirm-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETconfirm-password" data-method="GET" data-path="confirm-password" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETconfirm-password', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETconfirm-password" onclick="tryItOut('GETconfirm-password');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETconfirm-password" onclick="cancelTryOut('GETconfirm-password');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETconfirm-password" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>confirm-password</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETconfirm-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETconfirm-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTconfirm-password">Confirm the user&#039;s password.</h2>

            <p>
            </p>



            <span id="example-requests-POSTconfirm-password">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/confirm-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/confirm-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTconfirm-password">
            </span>
            <span id="execution-results-POSTconfirm-password" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTconfirm-password"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTconfirm-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTconfirm-password" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTconfirm-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTconfirm-password" data-method="POST" data-path="confirm-password" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTconfirm-password', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTconfirm-password" onclick="tryItOut('POSTconfirm-password');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTconfirm-password" onclick="cancelTryOut('POSTconfirm-password');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTconfirm-password" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>confirm-password</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTconfirm-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTconfirm-password"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTlogout">Destroy an authenticated session.</h2>

            <p>
            </p>



            <span id="example-requests-POSTlogout">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://localhost/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTlogout">
            </span>
            <span id="execution-results-POSTlogout" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTlogout"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTlogout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTlogout" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTlogout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTlogout" data-method="POST" data-path="logout" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTlogout" onclick="tryItOut('POSTlogout');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTlogout" onclick="cancelTryOut('POSTlogout');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTlogout" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>logout</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTlogout"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTlogout"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETstorage--path-">GET storage/{path}</h2>

            <p>
            </p>



            <span id="example-requests-GETstorage--path-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/storage/|{+-0p" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/storage/|{+-0p"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETstorage--path-">
                <blockquote>
                    <p>Example response (403):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETstorage--path-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETstorage--path-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETstorage--path-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETstorage--path-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETstorage--path-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETstorage--path-" data-method="GET" data-path="storage/{path}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETstorage--path-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETstorage--path-" onclick="tryItOut('GETstorage--path-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETstorage--path-" onclick="cancelTryOut('GETstorage--path-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETstorage--path-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>storage/{path}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETstorage--path-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETstorage--path-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="GETstorage--path-"
                        value="|{+-0p" data-component="url">
                    <br>
                    <p>Example: <code>|{+-0p</code></p>
                </div>
            </form>




        </div>
        <div class="dark-box">
            <div class="lang-selector">
                <button type="button" class="lang-button" data-language-name="bash">bash</button>
                <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
            </div>
        </div>
    </div>
</body>

</html>