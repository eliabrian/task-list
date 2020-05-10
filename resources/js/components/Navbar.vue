<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand m-0" href="/">
        <i class="fas fa-thumbtack"></i>asker
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li
            v-for="navItem in navItems"
            :key="navItem.id"
            v-bind:class="{'active':navItem.active}"
          >
            <a
              class="nav-link text-capitalize"
              v-on:click="markActive(navItem.id)"
              v-bind:href="navItem.route"
            >{{navItem.item}}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  data: function() {
    return {
      navItems: [
        {
          id: 0,
          item: "home",
          active: false,
          route: "/"
        }
      ]
    };
  },

  methods: {
    markActive(index) {
      this.navItems[index].active = !this.navItems[index].active;
    }
  }
};
</script>