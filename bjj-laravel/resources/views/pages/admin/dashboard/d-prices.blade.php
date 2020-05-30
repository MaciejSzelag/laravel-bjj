
<section class="dashboard-prices-wrap d-updateContent">
    @include('pages.admin.dashboard.head',[$titleDashboad= "Prices"])


    <div class="update_content_wrap">
        <div class="form-content">
            <div class="content-box">
                <h1 class="h1-price">Main</h1>
                <h2 class="h2-price">Adults and Juniors ( age 12+ )</h2>
                <div class="new_value">

                    <table>
                        <tr>
                            <th>Plan name </th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Frequency</th>
                            <th>action</th>
                            <th>Last updates</th>
                        </tr>


                         @foreach ($prices as $price)
                        <tr class="tr-main">
                            <td>
                                {{$price['planName']}}
                            </td>
                            <td>
                                {{$price['description']}}
                            </td>
                            <td>
                               £{{$price['price']}}
                            </td>
                            <td>
                                {{$price['frenquency']}}
                            </td>
                            <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updatePrices',['id'=> $price['id']])}}">Update</a></button></td>
                            <td>
                                {{$price['updated_at']}}
                            </td>

                        </tr>
                         @endforeach
                    </table>
            </div>
            </div>
            <div class="content-box">
                <h1 class="h1-price">Private</h1>
                <h2 class="h2-price">
                   Private lessons with Black Belt Coaches Ian or Amy Harrop
                </h2>
                <div class="new_value">

                    <table>
                        <tr>
                            <th>Plan name </th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Frequency</th>
                            <th>action</th>
                            <th>Last updates</th>
                        </tr>


                         @foreach ($privatePrices as $privPrice)
                        <tr class="tr-priv">
                            <td>
                                {{$privPrice['planName']}}
                            </td>
                            <td>
                                {{$privPrice['description']}}
                            </td>
                            <td>
                               £{{$privPrice['price']}}
                            </td>
                            <td>
                                {{$privPrice['frenquency']}}
                            </td>
                            <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updatePrivatePlan',['id'=> $privPrice['id']])}}">Update</a></button></td>
                            <td>
                                {{$privPrice['updated_at']}}
                            </td>

                        </tr>
                         @endforeach
                    </table>
                </div>
            </div>
            <div class="content-box">
                <h1 class="h1-price">Kids</h1>
                <h2 class="h2-price">Kids (age 7-11)</h2>
                <div class="new_value">

                    <table>
                        <tr>
                            <th>Plan name </th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Frequency</th>
                            <th>action</th>
                            <th>Last updates</th>
                        </tr>


                         @foreach ($kidsPrice as $kid)
                        <tr class="tr-kids">
                            <td>
                                {{$kid['planName']}}
                            </td>
                            <td>
                                {{$kid['description']}}
                            </td>
                            <td>
                               £{{$kid['price']}}
                            </td>
                            <td>
                                {{$kid['frenquency']}}
                            </td>
                            <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updateKidsPlan',['id'=> $kid['id']])}}">Update</a></button></td>
                            <td>
                                {{$kid['updated_at']}}
                            </td>

                        </tr>
                         @endforeach
                    </table>
            </div>


        </div>
    </div>
</section>
