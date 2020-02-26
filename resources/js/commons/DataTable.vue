<template>
    <div class="row">
        <slot name="filter"></slot>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" v-for="thead in theads" v-if="thead.sort" @click="sort(thead.key)" :style="{width: thead.width}">
                        {{thead.title}}
                        <span v-if="params.sort_column === thead.key">
                            <i class="fas fa-sort-down" v-if="params.direction === 'desc'"></i>
                            <i class="fas fa-sort-up" v-else></i>
                        </span>
                    </th>
                    <th scope="col" v-else>
                        {{thead.title}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <slot name="tbody" :items="model.data"></slot>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item" :class="[(model.prev_page_url === null) ? 'disabled' : '']">
                    <a class="page-link" href="#" aria-label="Previous" @click="prev()">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item" :class="[(params.page === n) ? 'active' : '']" v-for="n in numberWithDots">
                    <a class="page-link" href="#" @click="changePerPage(n)">{{n}}</a>
                </li>
                <li class="page-item" :class="[(model.next_page_url === null) ? 'disabled' : '']">
                    <a class="page-link" href="#" aria-label="Next" @click="next()">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    import {apiRequest} from "../helpers/apiRequest";
    import {buildUrl} from "../helpers/buildUrl";
    import {pagination} from "../helpers/pagination";

    export default {
        props: ['theads', 'params'],
        data() {
            return {
                model: {
                    data: []
                },
                numberWithDots: []
            }
        },
        created() {
            this.fetchData();
        },
        methods: {
            fetchData() {
                apiRequest('/api/request-off' + buildUrl(this.params))
                    .then(res => {
                        let m = res.model;
                        this.model = m;
                        this.numberWithDots = pagination(m.current_page, m.last_page);
                    })
                    .catch(err => console.log(err))
            },
            changePerPage(page) {
                event.preventDefault();
                if (page === '...') return false;
                this.params.page = page;
                this.fetchData();
            },
            prev() {
                event.preventDefault();
                this.params.page--;
                this.fetchData();
            },
            next() {
                event.preventDefault();
                this.params.page++;
                this.fetchData();
            },
            sort(column) {
                this.params.sort_column = column;
                if (this.params.direction === 'desc') {
                    this.params.direction = 'asc';
                } else {
                    this.params.direction = 'desc';
                }
                this.fetchData();
            }
        }
    }
</script>
<style>
    .page-link:focus {
        box-shadow: none;
    }
</style>
