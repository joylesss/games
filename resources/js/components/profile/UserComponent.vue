<template>
    <DataTable :theads="theads" :params="params" :urlUser="urlUser">
        <template #title>
            <h6 id="router">List Users</h6>
        </template>
        <template #tbody="props">
            <tr v-for="item in props.items">
                <th scope="row">{{item.id}}</th>
                <td>{{item.name}}</td>
                <td>{{item.phone}}</td>
                <td>{{item.fb_id}}</td>
                <td>{{item.fb_email}}</td>
                <td>{{item.fb_url}}</td>
            </tr>
        </template>
    </DataTable>
</template>
<script>
    import DataTable from "../../commons/DataTable";

    export default {
        data() {
            return {
                theads: [
                    {title: '#ID', key: 'id', sort: true},
                    {title: 'Name', key: 'name', sort: true},
                    {title: 'Phone', key: 'phone', sort: true},
                    {title: 'FB_ID', key: 'fb_id', sort: true},
                    {title: 'FB_Email', key: 'fb_email', sort: true},
                    {title: 'FB_URL', key: 'fb_url', sort: true},
                ],
                params: {
                    page: 1,
                    sort_column: 'id',
                    direction: 'desc',
                    per_page: 10,
                },
                urlUser: '/api/profile/users',
            }
        },
        components: {
            DataTable
        }
    }
</script>
