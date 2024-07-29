<template>
  <div class="container">
    <!-- <nav>
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
    </nav> -->

    <!-- ========================================= -->
    <!-- Navbar -->
    <!-- ========================================= -->
    <NavbarVue />
    <div class="mb-5">
      <router-view></router-view>
    </div>
    <!-- ========================================= -->
    <!-- Footer -->
    <!-- ========================================= -->
    <section class="">
      <!-- Footer -->
      <FooterVue />
    </section>
  </div>
</template>

<script>
import FooterVue from "./components/Footer.vue";
import NavbarVue from "./components/Navbar.vue";

export default {
  name: "App",
  components: {
    NavbarVue,
    FooterVue,
  },
};
</script>

<style>
nav {
  padding: 15px;
}
nav a {
  margin: 0 10px;
  text-decoration: none;
}
</style>