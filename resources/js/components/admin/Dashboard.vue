<template>
  <div>
    <b-container fluid>
      <b-row>
        <b-col cols="2" class="bg-dark text-light">
          <b-sidebar>
            <b-nav vertical>
              <b-nav-item href="/admin/dashboard">Dashboard</b-nav-item>
              <b-nav-item href="/admin/users">Users</b-nav-item>
              <b-nav-item href="/admin/settings">Settings</b-nav-item>
            </b-nav>
          </b-sidebar>
        </b-col>
        <b-col cols="10">
          <b-navbar variant="dark" bg="primary">
            <b-navbar-brand href="#">Admin Panel</b-navbar-brand>
          </b-navbar>
          <b-card>
            <h2>Welcome to the Admin Dashboard</h2>
            <p>This is a basic admin template built with Bootstrap Vue 3.</p>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'dashboard'
};
</script>

<style scoped>
body {
    background-color: #f8f9fa;
}

.bg-dark {
    background-color: #343a40 !important;
}

.b-sidebar {
    height: 100vh;
}

.b-card {
    margin-top: 20px;
}
</style>