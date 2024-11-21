<script setup>
</script>

<template>
    <div class="row">
        <div class="mt-2 col-lg-8 d-flex justify-content-start">
            <div class="row">
                <div class="col-lg-4 mt-2">
                    <span class="bold-text" >Filter by:</span>
                </div>
                <div class="col-lg-8">
                    <select class="forum-filter-select form-select" aria-label="Default select example">
                        <option selected>Date</option>
                        <option value="1">Most Commented</option>
                        <option value="2">Most Liked</option>
                    </select>
                </div>
            </div>
            

        </div>
        <div class="col-lg-4 d-flex justify-content-end">
                <button class="form-button btn btn-primary ml-4 mt-2 mb-2">Publish</button>
        </div>
    </div>
</template>