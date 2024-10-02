<template>
    <div class="register-wrapper d-flex align-items-center justify-content-center">
      <div class="register-card shadow-lg p-4">
        <div class="card-header text-center">
          <h2 class="mb-4">SIGN UP</h2>
        </div>
        <div class="card-body">
          <form @submit.prevent="register">
            <div class="form-group mb-4">
              <label for="firstname" class="form-label">First Name</label>
              <input
                type="text"
                class="form-control"
                id="firstname"
                v-model="firstname"
                placeholder="Enter your First Name"
                required
              />
            </div>
  
            <div class="form-group mb-4">
              <label for="middlename" class="form-label">Middle Name</label>
              <input
                type="text"
                class="form-control"
                id="middlename"
                v-model="middlename"
                placeholder="Enter your Middle Name (Optional)"
              />
            </div>
  
            <div class="form-group mb-4">
              <label for="lastname" class="form-label">Last Name</label>
              <input
                type="text"
                class="form-control"
                id="lastname"
                v-model="lastname"
                placeholder="Enter your Last Name"
                required
              />
            </div>
  
            <div class="form-group mb-4">
              <label for="email" class="form-label">Email Address</label>
              <input
                type="email"
                class="form-control"
                id="email"
                v-model="email"
                placeholder="Enter your email"
                required
              />
            </div>
  
            <div class="form-group mb-4">
              <label for="password" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                v-model="password"
                placeholder="Enter your password"
                required
              />
            </div>
  
            <div class="form-group mb-4">
              <label for="password_confirmation" class="form-label">Confirm Password</label>
              <input
                type="password"
                class="form-control"
                id="password_confirmation"
                v-model="password_confirmation"
                placeholder="Confirm your password"
                required
              />
            </div>
  
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        firstname: '',
        middlename: '',
        lastname: '',
        email: '',
        password: '',
        password_confirmation: '',
      };
    },
    methods: {
      async register() {
        try {
          const response = await axios.post('/api/register', {
            firstname: this.firstname,
            middlename: this.middlename,
            lastname: this.lastname,
            email: this.email,
            password: this.password,
            password_confirmation: this.password_confirmation,
          });
          alert(response.data.message);
          this.$router.push({ name: 'login' });
        } catch (error) {
          alert(error.response.data.message);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .register-wrapper {
    height: 100vh;
    background: linear-gradient(135deg, #667eea, #764ba2);
  }
  
  .register-card {
    width: 100%;
    max-width: 400px;
    background-color: white;
    border-radius: 15px;
  }
  
  .card-header {
    border-bottom: none;
  }
  
  .card-body {
    padding: 2rem;
  }
  
  .card-footer {
    border-top: none;
  }
  
  .form-control {
    border-radius: 8px;
    padding: 10px;
    border: 1px solid #ced4da;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
  }
  
  .btn-primary {
    background-color: #667eea;
    border-color: #667eea;
    transition: background-color 0.3s ease;
  }
  
  .btn-primary:hover {
    background-color: #764ba2;
    border-color: #764ba2;
  }
  
  h2 {
    color: #667eea;
  }
  
  a {
    color: #764ba2;
  }
  
  a:hover {
    color: #667eea;
    text-decoration: underline;
  }
  </style>
  