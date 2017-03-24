
<BODY>
@include('layouts.app')
<div id="page-wrapper">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div>

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                      data-toggle="tab"> Country Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Country Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <table width="98%">

                                            <tr height="40">
                                                <td width="28%"
                                                    align="right">
                                                    Code
                                                </td>
                                                <td width="02%" align="center">:</td>
                                                <td>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="30%">
                                                                <input class="form-control" type="hidden">


                                                            <td align="right">&nbsp;</td>

                                                            </td>

                                                            <td align="right">Country Tel Code</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="30%">
                                                                <input type="text" class="form-control"
                                                                       id="COUNTRY_TEL_CODE"
                                                                       name="COUNTRY_TEL_CODE"
                                                                       value=""
                                                                       placeholder="Country Tel Code "
                                                                       required>
                                                            </td>


                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Country Name
                                                </td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="NAME"
                                                           name="NAME" value=""
                                                           placeholder="Enter Name "
                                                           required ></td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right">Continent</td>
                                                <td align="center">:</td>

                                                <td><input type="text" class="form-control"
                                                           id="CONTINENT" name="CONTINENT"
                                                           value=""
                                                           placeholder="Enter Continent "
                                                           required></td>

                                            </tr>

                                            <tr height="40">
                                                <td align="right">Currency Name</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="70%">
                                                                <div class="input-append date">
                                                                    <input type="text" class="form-control"
                                                                           id="CURRENCY_NAME"
                                                                           name="CURRENCY_NAME"
                                                                           value=""
                                                                           placeholder="Currency Name"
                                                                           required>
                                                                </div>
                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Symbol</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="20%"><input type="text"
                                                                                   class="form-control"
                                                                                   id="SYMBOLE"
                                                                                   name="SYMBOLE"
                                                                                   value=""
                                                                                   placeholder="Symbol"
                                                                                   required>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Flag Image</td>
                                                <td align="center">:</td>
                                                <td>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="15%">

                                                                <img src="../../GHT/image/logo.png"
                                                                     style="width:204px;height:120px;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="40%">
                                                        <tr>
                                                            <td><input type="file" name="IMAGE_PATH"
                                                                       id="IMAGE_PATH"></td>
                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right" valign="top">Remarks</td>
                                                <td align="center" valign="top">:</td>
                                                <td><textarea class="form-control" rows="1" id="REMARKS"
                                                              placeholder="Enter Remarks"
                                                              name="REMARKS">
                                                        </textarea></td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right">&nbsp;</td>
                                                <td align="center">&nbsp;</td>
                                                <td>

                                                    <table class="table">
                                                        <tr>
                                                            <td width="50%">


                                                                <input type="hidden" name="operation"
                                                                       value="submit">
                                                                <button type="submit"
                                                                        class="btn btn-success">
                                                                    <b>Submit</b>
                                                                </button>
                                                                </form>

                                                            </td>





                                                            <td width="25%" align="left">

                                                                <form role="form" method="post"
                                                                      action="general_setup.php">
                                                                    <button type="submit" class="btn btn-default">
                                                                        Cancel
                                                                    </button>
                                                                </form>


                                                            </td>

                                                        </tr>
                                                    </table>


                                                </td>
                                            </tr>

                                        </table>


                                    </div>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane" id="list">
                                <div class="container" style="padding:5px;width:100%">
                                    <div class="panel panel-default">
                                    </div>

                                    <div class="list-group">
                                        <div class="panel panel-default">
                                            <div class="panel-body">

                                                <div class="list-group">
                                                    <table width="100%" class="table table-striped" border="0">
                                                        <thead>
                                                        <tr>
                                                            <th>Country Code</th>
                                                            <th>Tel Code</th>
                                                            <th>Name</th>
                                                            <th>Continent</th>
                                                            <th>Currency</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                        </tr>

                                                        <tr>
                                                            <td width="20%">
                                                                <input name="DATE" class="form-control" placeholder="Code"
                                                                       id="dp_date">
                                                            </td>
                                                            <td>
                                                                <input name="DATE" class="form-control" placeholder="Tel Code"
                                                                       id="dp_date">
                                                            </td>
                                                            <td>
                                                                <input name="TIME" class="form-control" placeholder="Name"
                                                                       id="dp_time">

                                                            </td>
                                                            <td width="20%">
                                                                <SELECT name="STATUS" class="form-control">
                                                                    <OPTION VALUE="">Asia </OPTION>
                                                                    <OPTION VALUE="P">Europe</OPTION>

                                                                </SELECT>
                                                            </td>
                                                            <td width="15%">
                                                                <SELECT name="STATUS" class="form-control">
                                                                    <OPTION VALUE="">Nepal</OPTION>
                                                                    <OPTION VALUE="P">Pakistan</OPTION>
                                                                    <OPTION VALUE="A">Srilanka</OPTION>
                                                                </SELECT>

                                                            </td>
                                                            <td>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </td>
                                                        </tr>


                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-body">
                    <table width="100%" border="0">
                        <tr>
                            <td width="40%">&nbsp;</td>

                            <td width="60%" align="center">
                                <button type="submit" class="btn btn-success"> Add
                                    New Country
                                </button>
                                </a>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped" border="0">
                        <thead>
                        <tr style="width:100%">
                            <th width="95%">Country List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
</BODY>
