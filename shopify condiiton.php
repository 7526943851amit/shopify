

{% if product.metafields.custom.productpagepromo != blank %}
            <div class="productPagePromoText">
              {{ product.metafields.custom.productpagepromo }}
            </div>
            {% endif %}




  {% if template == "page.shop" or page.handle contains 'affiliate-program'
or template == 'collection.deals' or template == "product" or template == "customers/login" or template == "list-collections" or template == "collection" or template == "page.contact-us" or template == "page.bonus-catalog" or template == "cart" or template == "search" %}
{% if product.title == 'amit' %}
  Hey Kevin!
{% elsif product.title == 'anonymous' %}
  Hey Anonymous!
{% else %}
  Hi Stranger!
{% endif %}
<h1>{{ section.settings.heading }}</h1><br>
<h1>{{ section.settings.des_content }}</h1>
{% schema %}
{
"name": "amit",
"class": "amit",
"settings": [
{
"type"  : "text",
"id"    : "heading",
"label" : " Main Heading"
},
{
"type"  : "text",
"id"    : "des_content",
"label" : "Description "
}
],
"presets": [
{
"name"      : "Diet Plan",
"category"  : "Custom"
}
]
}
{% endschema %}
