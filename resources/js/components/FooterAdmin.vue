<template>
  <footer class="py-4 ">
    <div class="container px-4 mx-auto">
      <hr class="mb-4 border-b-1 border-blueGray-200" />
      <div
        class="flex justify-center flex-auto w-full place-items-center "
      >

          <div
            class="py-1 text-sm font-semibold text-center text-blueGray-500 md:text-left"
          >
            Copyright © {{ date }}
            <a
              href="https://www.creative-tim.com?ref=vn-footer-admin"
              class="py-1 text-sm font-semibold text-blueGray-500 hover:text-blueGray-700"
            >
              finIgnite
            </a>

        </div>
       <!--
        <div class="w-full px-4 md:w-8/12">
          <ul class="flex flex-wrap justify-center list-none md:justify-end">
            <li>
              <a
                href="https://www.creative-tim.com?ref=vn-footer-admin"
                class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800"
              >
                Creative Tim
              </a>
            </li>
            <li>
              <a
                href="https://www.creative-tim.com/presentation?ref=vn-footer-admin"
                class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800"
              >
                About Us
              </a>
            </li>
            <li>
              <a
                href="http://blog.creative-tim.com?ref=vn-footer-admin"
                class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800"
              >
                Blog
              </a>
            </li>
            <li>
              <a
                href="https://github.com/creativetimofficial/vue-notus/blob/main/LICENSE.md?ref=vn-footer-admin"
                class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800"
              >
                MIT License
              </a>
            </li>
          </ul>
        </div>
        -->
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  data() {
    return {
      date: new Date().getFullYear(),
    };
  },
};
</script>
