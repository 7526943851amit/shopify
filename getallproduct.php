<link
        rel="stylesheet"
        href="{{ 'amit.css' | asset_url }}"
      > //css link shopify
{% for product in collections['all'].products %}
    <h1>{{ product.title }}</h1>
    <h5>{{ product.description }}</h5>
    <h5>{{ product.featured_image | image_url: width:400 | img_tag }}</h5>
 {% for image in product.images %} 
{{ image.src | product_img_url: 'grande' | img_tag}}
         {% endfor %}
{% endfor %}

{% for product in collections.all.products  %}
    <h1>{{ product.title }}</h1>
    <h5>{{ product.description }}</h5>
    <h5>{{ product.featured_image | image_url: width:400 | img_tag }}</h5>
{% endfor %}

{% section 'mysection' %}
{% assign customproducts = all_products['hh'] %}
{{ customproducts.title }}
  
{{ customproducts.metafields.custom.mycustomfield }}


{% schema %}
{
  "name": "All collection",
  "settings": [
    {
      "type": "product",
      "id": "mycollection",
      "label": "Select collection"
    }
  ]
}
{% endschema %}
{{ product.title }}

{{ product.description }}
   {% for image in product.images %} 
{{ image.src | product_img_url: 'grande' | img_tag}}
     {% endfor %}
  {{ product.price |money_without_trailing_zeros  }}
        "type": "checkbox",
        "id": "show_cart_note",
