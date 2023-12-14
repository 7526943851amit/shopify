
{% for product in collections['all'].products %}
    <h1>{{ product.title }}</h1>
    <h5>{{ product.description }}</h5>
    <h5>{{ product.featured_image | image_url: width:400 | img_tag }}</h5>
{% endfor %}



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
