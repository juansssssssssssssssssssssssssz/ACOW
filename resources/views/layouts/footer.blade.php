<footer class="relative bg-gray-300 pt-8 pb-6">

    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="w-full lg:w-5/12 px-4">
          <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
          <h5 class="text-lg mt-0 mb-2 text-gray-700">
            Find us on any of these platforms, we respond 1-2 business days.
          </h5>
          <div class="mt-6">
            <button
              class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-twitter"></i></button
            ><button
              class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-facebook-square"></i></button
            ><button
              class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-dribbble"></i></button
            ><button
              class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-github"></i>
            </button>
          </div>
          <div class="text-gray-600 text-sm py-1 mt-4">
            Copyright © 2021
            <a
              href="/"
              class="text-gray-600 hover:text-gray-900"
              >Company-XXX</a
            > &nbsp; • &nbsp; <a href="https://icons8.com/icon/97693/cookie" target="_blank" rel="noreferrer">Cookie icon by Icons8</a>
          </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex flex-wrap items-top mb-6 mt-4">
            <div class="w-full lg:w-4/12 md:w-6/12 px-0 ml-auto">
              <span
                class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                >Useful Links</span
              >
              <ul class="list-unstyled">
                <li>
                  <a
                    class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="/about"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="/blog"
                    >Blog</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://www.github.com/abhinavs"
                    >Github</a
                  >
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-4/12 md:w-6/12 mt-4 sm:mt-0 md:px-4">
              <span
                class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                >Other Resources</span
              >
              <ul class="list-unstyled">
                <li>
                  <a
                    class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://github.com/abhinavs/cookie/blob/master/LICENSE.md"
                    >MIT License</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="/terms"
                    >Terms &amp; Conditions</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="/privacy-policy"
                    >Privacy Policy</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="/contact-us"
                    >Contact Us</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-400" />
      <div
        class="flex flex-wrap items-center md:justify-between justify-center"
      >
        <div class="w-full px-4 mx-auto text-center">
          <div class="text-sm text-gray-600">
              Powered by <a class="hover:text-indigo-600 font-semibold" href="https://www.soopr.co" target="_blank" rel="noreferrer">Soopr</a>
              &nbsp;
              •
              &nbsp;
              Theme&nbsp;<a class="hover:text-indigo-600 font-semibold" href="https://github.com/abhinavs/cookie" target="_blank" rel="noreferrer">Cookie</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  {%- if site.soopr -%}
    {%- if site.soopr.publish_token and jekyll.environment == "production" -%}
      <script async='' data-soopr-token="{{site.soopr.publish_token}}" defer='defer' src="https://sdk.soopr.co/soopr.js"></script>
    {%- else -%}
      <script async defer src="https://sdk.soopr.co/soopr.js"></script>
    {%- endif -%}
  {%- endif -%}
  Footer
  © 2022 GitHub, Inc.
  Footer navigation
  Terms
  Privacy
  Security
  Status
  Docs
  Contact GitHub
  Pricing
  API
  Training
  Blog
  About
