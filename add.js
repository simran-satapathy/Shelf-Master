function addValidation()
{
    var title=document.forms["addBook"]["title"].value
    if (title=="" || title==null)
    {
        window.alert("Please enter Book Title")
        return false
    }
    var author=document.forms["addBook"]["author"].value
    if (author=="" || author==null)
    {
        window.alert("Please enter Book Author")
        return false
    }
    var genre=document.forms["addBook"]["genre"].value
    if (genre=="" || genre==null)
    {
        window.alert("Please enter Genre")
        return false
    }
    var price=document.forms["addBook"]["price"].value
    if (price=="" || price==null)
    {
        window.alert("Please enter Price")
        return false
    }
    if(!/^[0-9]*$/.test(price))
    {
        window.alert("Price should be numeric")
        return false
    }
    var quantity=document.forms["addBook"]["quantity"].value
    if (quantity=="" || quantity==null)
    {
        window.alert("Please enter Quantity")
        return false
    }
    if(!/^[0-9]*$/.test(quantity))
    {
        window.alert("Quantity should be numeric")
        return false
    }
}