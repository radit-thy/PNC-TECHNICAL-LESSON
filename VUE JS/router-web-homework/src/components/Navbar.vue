<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PNC Classroom</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
              <router-link class="nav-link active" aria-current="page" to="/"
                >HOME</router-link
              >
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="#">About</a> -->
              <router-link class="nav-link active" to="/about">ABOUT US</router-link>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="#">About</a> -->
              <router-link class="nav-link active" to="/skills">SKILLS PROVIDER</router-link>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="#">About</a> -->
              <router-link class="nav-link active" to="/contact">CONTACT</router-link>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search Skills Here!"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
</template>

<script>

export default {
    name: "NavbarComponent",


}
</script>

<style>

</style>