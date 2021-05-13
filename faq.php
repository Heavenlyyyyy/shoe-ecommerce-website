<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <title>Urban Shoes Online Shop | Urban Shoes MY</title>
    <style>
        <?php include 'styles.css'; ?>
        
.accordion-item{
background-color:white;
border-radius: .4rem;
padding: 1 rem;
}
.accordion-link{
font-size:1.8rem;
color:black;
background-color:lightgrey;
display:flex;
align-items:center;
justify-content:space-between;
padding: 3 rem 0;
border-style: outset;
border-color: white;
}
.answer{
max-height: 0;
overflow: hidden;
position:relative;
background-color: white;
font-size: 1.5 rem;
transition: max-height 650ms;
}

.answer::before{
content: "";
position:absolute;
width: .6rem
height:90%
top:50%;
transform: translateY(-50%);
}
.accordion-item:target .answer{
max-height: 20rem;
}
.faqHeader{
text-decoration: underline overline white;
text-align:center;
background-color:black;
color:white;
}
.ans{
font-size:1.5rem;
padding: 1 rem;
}
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="wrapper hovercollapse">
        <?php include('navbar.php'); ?>
        <?php include('sidebar.php'); ?>
        <div class="maincontainer">
            <div class="container">
                <div class="content">
                    <div class="accordion">
				<h1 class=faqHeader>Order&Delivery</h1>
				<div class="accordion-item" id="question1">
				<a class="accordion-link" href="#question1">
				Standard Home Delivery
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				The standard delivery of shoes will be made within 4-7 working days after the
                                        order
                                        is dispatched.</br>
                                        The delivery fee is RM20
				</p>						
				</div>
				</div>
				<div class="accordion-item" id="question2">
				<a class="accordion-link" href="#question2">
				Is there any free delivery?
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				Yes. The free delivery service will be provided if purchase more than RM 450 in
                                        a
                                        trasaction.
				</p>
				</div>
				</div>
				<div class="accordion-item" id="question3">
				<a class="accordion-link" href="#question3">
				What if I received wrong items?
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				If you have received the wrong item, then please contact our Customer Care team.
                                        They will be pleasure to assist you.
				</p>
				</div>
				</div>
				<div class="accordion-item" id="question4">
				<a class="accordion-link" href="#question4">
				What if I received a damaged items
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				If you received damaged items. Please contact our Customer Care team for further
                                        discussing on your return option. If the items are found out have any
                                        manufacturing
                                        fault. You may request refund as well.
				</p>
				</div>
				</div>
				<h1 class=faqHeader>Returns&Refunds </h1>
				<div class="accordion-item" id="question5">
				<a class="accordion-link" href="#question5">
				How do I return/exchange my order?
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				Returns In store:</br>
                                        You can return your order for free in store!</br>
                                        Returning an order by post:</br>
                                        To return a purchase made through the website, mobile or app, you can make your
                                        own
                                        arrangements through any postal carrier to our returns centre. We recommend you
                                        use
                                        one who can give you a "Certificate of Posting" as, until the parcel reaches us,
                                        it's your responsibility. Please take note that walk-ins will not be entertained
                                        at
                                        the returns centre.
                                        </br>Urban Returns Centre:</br>
                                        LF Logistics Services (M) Sdn Bhd</br>
                                        (Urban Returns)</br>
                                        LOT 22, Jalan pyramid 2,</br>
                                        Seksyen 15,</br>
                                        40400 Shah Alam, Selangor</br>
                                        Malaysia</br>
				</p>
				</div>
				</div>
				<div class="accordion-item" id="question6">
				<a class="accordion-link" href="#question6">
				How long will it take to get my refund?
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				Normally, the refund process will take about 7-14 days to reflect in your bank
                                        account.
				</p>
				</div>
				</div>
				<div class="accordion-item" id="question7">
				<a class="accordion-link" href="#question7">
				How long can I returns the shoes that not suitable for me?
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				You may return the shoes within 7 days after your purchase made in our outlet.
                                        However, if the shoes is found out damaged but not manufacturing fault the
                                        return
                                        process is not allowed.</br>
                                        You also may contact our Customer Care team online for further return process.
				</p>
				</div>
				</div>
				<h1 class=faqHeader>Product&Stock </h1>
				<div class="accordion-item" id="question8">
				<a class="accordion-link" href="#question8">
				Can you tell me if any new arrival item are landed?
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				We are sorry to tell you that our Customer Care team only have limited
                                        information
                                        on the product stock, to get our latest information on our new arrival items
                                        please follow our social media.
				</p>
				</div>
				</div>
				<div class="accordion-item" id="question9">
				<a class="accordion-link" href="#question9">
				Where can I find your size guide and care instructions?
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				You can find a size guide and care instructions on any of our blog pages.
				</p>
				</div>
				</div>
				<div class="accordion-item" id="question10">
				<a class="accordion-link" href="#question10">
				Preorder
				<img src="images/drop-down arrow.png" alt="" style="width:35px;height:35px;right:10px;" />
				</a>
				<div class="answer">
				<p class="ans">
				All items that are available for Pre-Order will be despatched on the day of
                                        release.
				</p>
				</div>
				</div>
				</div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>