<template>
  <v-navigation-drawer v-model="drawer" app>
    <v-list-item>
      <v-list-item-avatar>
        <v-img
          src="https://www.worcester.ac.uk/images/profiles/Pete-Clews.xf522afeb.jpg"
        ></v-img>
      </v-list-item-avatar>

      <v-list-item-content>
        <v-list-item-title>Pete Clews</v-list-item-title>
      </v-list-item-content>
    </v-list-item>

    <v-list dense>
      <v-list-item link exact :to="{ name: 'home' }">
        <v-list-item-action>
          <v-icon>mdi-home</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Home</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item link exact :to="{ name: 'about' }">
        <v-list-item-action>
          <v-icon>mdi-information</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>About</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item link exact :to="{ name: 'history' }">
        <v-list-item-action>
          <v-icon>mdi-food-variant</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Booking History</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item link exact :to="{ name: 'logout' }">
        <v-list-item-action>
          <v-icon>mdi-power-settings</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Log Out</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item>
        <v-list-item-action
          ><v-switch v-model="$vuetify.theme.dark" />
        </v-list-item-action>
        <v-list-item-content
          ><v-list-item-title> Dark Mode</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
    };
  },
};
</script>
