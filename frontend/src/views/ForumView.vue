<script setup>
import { RouterLink } from 'vue-router';

</script>

<template>
    <div class="container forum-list-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="forum-tag-section">
                <div class="row d-flex align-items-center">
                    <div class="forum-title pt-4">
                        <span class="h4">Discussions</span>
                    </div>
                </div>
                <ul class="list-group p-4">
                    <RouterLink class="forum-link" to="/forums/art-discussions"><li class="list-group-item forum-link-item">Art Tips & Discussions</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/gamedev"><li class="list-group-item forum-link-item">Game development</li></RouterLink>
                </ul>
            </div>

            <div class="forum-tag-section">
                <div class="row d-flex align-items-center">
                    <div class="forum-title pt-4">
                        <span class="h4">Artists Feed</span>
                    </div>
                </div>
                <ul class="list-group p-4">
                    <RouterLink class="forum-link" to="/forums/socials"><li class="list-group-item forum-link-item">Socials and Portifolio</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/arts"><li class="list-group-item forum-link-item">Arts</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/arts-wip"><li class="list-group-item forum-link-item">Art WIPs</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/games-wips"><li class="list-group-item forum-link-item">Games WIPs</li></RouterLink>
                </ul>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="forum-tag-section">
                <div class="row d-flex align-items-center">
                    <div class="forum-title pt-4">
                        <span class="h4">Work</span>
                    </div>
                </div>
                <ul class="list-group p-4">
                    <RouterLink class="forum-link" to="/forums/commisions"><li class="list-group-item forum-link-item">Commisions Announcements</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/volunteers"><li class="list-group-item forum-link-item">Volunteers</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/hiring"><li class="list-group-item forum-link-item">Hiring</li></RouterLink>
                </ul>
            </div>

            <div class="forum-tag-section">
                <div class="row d-flex align-items-center">
                    <div class="forum-title pt-4">
                        <span class="h4">Misc</span>
                    </div>
                </div>
                <ul class="list-group p-4">
                    <RouterLink class="forum-link" to="/forums/food"><li class="list-group-item forum-link-item">Food</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/anime"><li class="list-group-item forum-link-item">Anime</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/cartoon"><li class="list-group-item forum-link-item">Cartoon</li></RouterLink>
                    <RouterLink class="forum-link" to="/forums/series"><li class="list-group-item forum-link-item">Series</li></RouterLink>
                </ul>
            </div>
            </div>

        </div>
    </div>
</template>