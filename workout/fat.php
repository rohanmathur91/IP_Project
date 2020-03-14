<!DOCTYPE html>
<html>
<head>
	<title>Fat score</title>
	 <meta name="description" content="This online BFP (Body Fat Percentag) calculator is used to calculate the percentage of fat in human body.">
    <link href="https://www.mytecbits.com/tools/medical/bfpcalculator" rel="canonical" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/tools/Content/css?v=zsOSE6cq0x1_iD3r6BhRUfj7NCE0mz7NjOKl5Yia2ec1" rel="stylesheet"/>


    
</head>
<body>
	   <div class="page-body">
<form action="/tools/medical/bfpcalculator" id="formBFP" method="post">    <p>Enter your gender, age, height and weight. Then click the "Calculate BFP" button.</p>
    <h3 id="sectionError" class="text-danger">
        
    </h3>
    <div class="form-group row">
        <div class="col-xs-6 col-md-3 col-lg-3">
            <label for="rdoGender">Gender:</label><span style="color:red;">*</span><br />
            <label class="">
                <input checked="True" data-val="true" data-val-required="The Gender field is required." id="rdoGender" name="rdoGender" type="radio" value="Female" /> Female &nbsp;
            </label>
            <label class="">
                <input id="rdoGender" name="rdoGender" type="radio" value="Male" /> Male
            </label>
        </div>
        <div class="col-xs-6  col-md-3 col-lg-2">
            <label for="ListAge">Age:</label><span style="color:red;">*</span>
            <select class="form-control" data-val="true" data-val-number="The field SelectedListAge must be a number." data-val-required="Age is required for calculation!... Please select it." id="SelectedListAge" name="SelectedListAge"><option value="">Select..</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option>
<option value="100">100</option>
<option value="101">101</option>
<option value="102">102</option>
<option value="103">103</option>
<option value="104">104</option>
<option value="105">105</option>
<option value="106">106</option>
<option value="107">107</option>
<option value="108">108</option>
<option value="109">109</option>
<option value="110">110</option>
</select>
        </div>
        <div class="col-xs-12  col-md-6 col-lg-7">
            <span class="field-validation-valid text-danger" data-valmsg-for="SelectedListAge" data-valmsg-replace="true"></span>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6 col-md-4 col-lg-2">
            <label for="Height">Height:</label><span style="color:red;">*</span>
            <div class="input-group">
                <input Maxlength="3" class="form-control" data-val="true" data-val-number="The field Height must be a number." data-val-range="Height must be 2 ft. (61 cm) or taller up to 8 ft. 11 in. (271 cm)!..." data-val-range-max="271" data-val-range-min="61" data-val-required="Height is required for calculation!... Please enter it." id="intHeight" name="Height" type="text" value="" />
                <div class="input-group-addon">cm</div>
            </div>
            <small>Centimeters</small>
        </div>
        <div class="col-xs-12 col-md-8 col-lg-5">
            <div class="row col-xs-12">
                <label for="ListHeightFeet">(or)</label>
            </div>
            <div class="row col-xs-12">
                <div class="col-xs-6">
                    <div class="input-group">
                        <select class="form-control" data-val="true" data-val-number="The field SelectedListHeightFeet must be a number." id="SelectedListHeightFeet" name="SelectedListHeightFeet"><option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
                        <div class="input-group-addon">ft</div>
                    </div>
                    <small>Feet</small>
                </div>
                <div class="col-xs-6">
                    <div class="input-group">
                        <select class="form-control" data-val="true" data-val-number="The field SelectedListHeightInches must be a number." id="SelectedListHeightInches" name="SelectedListHeightInches"><option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
</select>
                        <div class="input-group-addon">in</div>
                    </div>
                    <small>Inches</small>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-xs-12">
            <span class="field-validation-valid text-danger" data-valmsg-for="Height" data-valmsg-replace="true"></span>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6 col-md-4 col-lg-2">
            <label for="WeightKg">Weight:</label><span style="color:red;">*</span>
            <div class="input-group">
                <input Maxlength="5" class="form-control" data-val="true" data-val-number="The field Weight in Kg must be a number." data-val-range="Weight should be between 5 kg to 200 kg (or) 10 lb. to 400 lb." data-val-range-max="200" data-val-range-min="5" data-val-required="Weight is required for calculation!... Please enter it." id="WeightKg" name="WeightKg" type="text" value="" />
                <div class="input-group-addon">kg</div>
            </div>
            <small>Kilograms</small>
        </div>
        <div class="col-xs-6 col-md-4 col-lg-2">
            <label for="WeightLb">(or)</label>
            <div class="input-group">
                <input Maxlength="5" class="form-control" data-val="true" data-val-number="The field Weight in Lb must be a number." id="WeightLb" name="WeightLb" type="text" value="" />
                <div class="input-group-addon">lb</div>
            </div>
            <small>Pounds</small>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
            <span class="field-validation-valid text-danger" data-valmsg-for="WeightKg" data-valmsg-replace="true"></span><br />
            <span class="field-validation-valid text-danger" data-valmsg-for="WeightLb" data-valmsg-replace="true"></span>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-3">
            <input type="submit" value="Calculate BFP" class="btn btn-lg btn-primary" id="btnSubmit" />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-12 col-md-6 col-lg-6">
            <label for="Your_Body_Fat_Percentage__BFP_:">Your Body Fat Percentage (BFP):</label>
            <textbox readonly id="BFP" class="form-control input-lg" rows="10"></textbox>
        </div>
    </div>
</form>
</body>
</html>