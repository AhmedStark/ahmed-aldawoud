<template>
    <div>
  <v-toolbar app dark color=" teal darken-4">
    
    <v-toolbar-side-icon  @click.stop="drawer = !drawer"  class="hidden-md-and-up"></v-toolbar-side-icon>


    
    <v-toolbar-title class="lime--text">Welcome:)</v-toolbar-title>

    <v-spacer></v-spacer>


    <v-btn href="/" flat class="white--text hidden-sm-and-down">
      About me
    </v-btn>

    <v-btn flat class="white--text hidden-sm-and-down">
      My projects
    </v-btn>

    <v-btn flat class="white--text hidden-sm-and-down">
      My CV
    </v-btn>
    
    <v-btn flat class="white--text hidden-sm-and-down">
      My experience
    </v-btn>

    <v-btn flat class="white--text hidden-sm-and-down">
      Contact me
    </v-btn>
  </v-toolbar>


  <v-navigation-drawer
    class="teal darken-3 fixed"
      v-model="drawer"
      absolute
      temporary
      dark
      
    >
      

    
      <v-list >
        <v-list-tile href="/" >
            <v-list-tile-title class="title"> My project</v-list-tile-title>
            
        </v-list-tile>
        <v-divider></v-divider>
        <v-list-tile href="/" >
            <v-list-tile-title class="title"> My CV</v-list-tile-title>
            
        </v-list-tile>

        <v-divider></v-divider>

        <v-list-tile href="/" >
            <v-list-tile-title class="title"> My experience</v-list-tile-title>
            
        </v-list-tile>

        <v-divider></v-divider>
        <v-list-tile href="/" >
            <v-list-tile-title class="title"> Contact me</v-list-tile-title>
            
        </v-list-tile>
        <v-divider></v-divider>
      </v-list>
    </v-navigation-drawer>
    
    </div>
</template>

<script>
  export default {
    data () {
      return {
        drawer: null,
        
      }
    }
  }
</script>

<style>
  .fixed{
    position: fixed;
  }
</style>
