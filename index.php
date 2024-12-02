<html>
    <head>
        <link rel="stylesheet" href="CSS/calcTest.css">
        <script>
            function change(){
                document.getElementsByClassName("hide")[0].style.display="none"
                document.getElementsByClassName("show")[0].style.display="block"
            }
        </script>
    </head>

    <body>
        <main>
            <div class="hide">
            <img src="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg">
            <h1>Sign in</h1>
            <form>
                <input type="email" name="email" class="inputs" maxlength="113" size="47" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" placeholder="Email, phone, or Skype"><br><br>
                <input type="password" name="password" class="inputs" maxlength="113" size="47" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" placeholder="Password">
                <p>No account? <a href="https://login.live.com/oauth20_authorize.srf?client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&scope=service%3a%3aaccount.microsoft.com%3a%3aMBI_SSL+openid+profile+offline_access&redirect_uri=https%3a%2f%2faccount.microsoft.com%2fauth%2fcomplete-signin-oauth&response_type=code&state=H4sIAAAAAAAEAA3NzbpCQAAA0He521n4GEwWLboaUozfKez8jDKISOLp7z0vcH7ufV-zGhHgbyGrZnuiyCySvDMMi7yttCvek7JGAllyPEL7bi8FY2I3cjh-vn4mwG6LvSxtat3pL3Oi3qaddCbN1QrlV3XOOp8CxA7NR289Ue6xPDyKh7Y2g9qzjE50QQHux5YsN7PAEgj_5_fhQhNT147v6Zyz0MQwSDLouoBwVOuZnGZhEDlB_lTmhp0qQ71jYDVA2nxlufB-HjUlJutLr5TdJgadDxa4xqVQ2gmyBEbnSPI5kA4dB1ON4UnKT6sBPK5_B3-9FvAbw2hgybGN3cXz5FuWzqWacMSJ-OvQ1ohC23gqU021ZASfEgkBx8gZcpeHlAg8lC0M8bLf__wBm7VZnFoBAAA&prompt=login&x-client-SKU=MSAL.Desktop&x-client-Ver=4.61.3.0&uaid=b895a2e49c1740d7b7730d1ee265945b&msproxy=1&issuer=mso&tenant=common&ui_locales=en-US&client_info=1&signup=1&lw=1&fl=easi2&epct=PAQABDgEAAADW6jl31mB3T7ugrWTT8pFeJH7x_9VqdBBlZfUWeXgOX1cBLtC2kUMjj4K8KnQWag10FQxI3Yn7j6_O7V3OKqjU4Aa2MTa3_489EXgL60nQiOA9pBl41N60W4yBL0SyI7qIjlpjggqbQwe9KTeMfcOImTPPJFgGTwvhcWwZpAvSBTHnNZeTH9iVzLiioN26JdIPeVWEYnZgyeEj1KvUugd6M3voldE0HwP97kI9AqeVqSAA&jshs=0">Create one!</a></p>
                <p><a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=service%3A%3Aaccount.microsoft.com%3A%3AMBI_SSL+openid+profile+offline_access&response_type=code&client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&redirect_uri=https%3A%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin-oauth&client-request-id=b895a2e4-9c17-40d7-b773-0d1ee265945b&x-client-SKU=MSAL.Desktop&x-client-Ver=4.61.3.0&x-client-OS=Windows+Server+2019+Datacenter&prompt=login&client_info=1&state=H4sIAAAAAAAEAA3NzbpCQAAA0He521n4GEwWLboaUozfKez8jDKISOLp7z0vcH7ufV-zGhHgbyGrZnuiyCySvDMMi7yttCvek7JGAllyPEL7bi8FY2I3cjh-vn4mwG6LvSxtat3pL3Oi3qaddCbN1QrlV3XOOp8CxA7NR289Ue6xPDyKh7Y2g9qzjE50QQHux5YsN7PAEgj_5_fhQhNT147v6Zyz0MQwSDLouoBwVOuZnGZhEDlB_lTmhp0qQ71jYDVA2nxlufB-HjUlJutLr5TdJgadDxa4xqVQ2gmyBEbnSPI5kA4dB1ON4UnKT6sBPK5_B3-9FvAbw2hgybGN3cXz5FuWzqWacMSJ-OvQ1ohC23gqU021ZASfEgkBx8gZcpeHlAg8lC0M8bLf__wBm7VZnFoBAAA&msaoauth2=true&lc=1033#">Can't access your account?</a></p>
            </form>
            <button id="submitButton" onclick="change()">Sign in</button>
            </div>
            <div class="show">
                <h1>You've been scammed</h1>
                <p>Number of people who have also been scammed: </p>
                <p>Your password wasn't stored, don't worry</p>
                <form>
                    <input type="text" name="who" class="inputs" maxlength="113" size="47" placeholder="Let me know who sent this link to you">
                    <br><br style="clear: both;"><button id="submitButton">Submit</button>
                </form>
            </div>
        </main>
    </body>
</html>
