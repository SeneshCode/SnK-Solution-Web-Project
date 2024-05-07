@include('styles.style')
<div style="">
    <h1 style="color:blue;">SnK Solutions Contact by {{ $SnK_Contact_Information['c_name'] }}</h1>

    <div class="">
        <table class="table" border="1" style="padding: 1px;">

                <tbody>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of Customer </th>
                        <td style="padding: 8px;color:green;">{{ $SnK_Contact_Information['c_name'] }}</td>
                    </tr>
                    <tr>
                        <th scope="col" style="padding: 8px;">Number of Customer </th>
                        <td style="padding: 8px;color:green;">{{ $SnK_Contact_Information['c_number'] }}</td>
                    </tr>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of email </th>
                        <td style="padding: 8px;">    {{ $SnK_Contact_Information['email'] }}
                        </td>
                    </tr>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of subject </th>
                        <td style="padding: 8px;">{{ $SnK_Contact_Information['subject'] }}</td>
                    </tr>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of Customer</th>
                        <td style="padding: 8px;">{{ $SnK_Contact_Information['message'] }}</td>
                    </tr>
                </tbody>
        </table>
    </div>

</div>



@include('styles.script')
