# Thimoo challenge API

## Production

You can find the live API here: [challenge.thimoo.ch/api/products](https://challenge.thimoo.ch/api/products).

## Examples

**GET /api/products**

This route return the complete list of all products in the database.

```
[
    {
        "id": 1,
        "name": "Développement sur mesure",
        "hour_amount": "20.0",
        "description": "Développement d'une fonctionnalité sur mesure.",
        "created_at": "2017-06-26 14:47:17",
        "updated_at": "2017-06-26 14:47:17"
    },
    {
        "id": 2,
        "name": "Design & Graphisme",
        "hour_amount": "25.0",
        "description": "Réalisation de flyers ou d'affiches.",
        "created_at": "2017-06-26 14:47:17",
        "updated_at": "2017-06-26 14:47:17"
    },
    {
        "id": 3,
        "name": "Web design",
        "hour_amount": "40.0",
        "description": "Création d'une maquette sur mesure respectant la charte graphique.",
        "created_at": "2017-06-26 14:47:17",
        "updated_at": "2017-06-26 14:47:17"
    },
    {
        "id": 4,
        "name": "SEO",
        "hour_amount": "32.0",
        "description": "Mise en place d'une stratégie de référencement naturel.",
        "created_at": "2017-06-26 14:47:17",
        "updated_at": "2017-06-26 14:47:17"
    },
    {
        "id": 5,
        "name": "Campagne sur les réseaux sociaux",
        "hour_amount": "18.0",
        "description": "Création d'une page Facebook et gestion de la publicité.",
        "created_at": "2017-06-26 14:47:17",
        "updated_at": "2017-06-26 14:47:17"
    }
]
```

**POST /api/offers**

Use this route to store a new offer in the database. The format to store a new offer is the next one (products is an array of `product.id` and quantity):

```
{
	"name": "DEVIS site web",
	"client_name": "Migros",
	"description": "Offre pour une boutique en ligne",
	"products": [
		{"id": 1, "qte": 2},
		{"id": 2, "qte": 8},
		{"id": 3, "qte": 4},
		{"id": 4, "qte": 1}
	]
}
```

The result is the next one:

```
{
    "name": "DEVIS site web",
    "client_name": "Migros",
    "description": "Offre pour une boutique en ligne",
    "updated_at": "2017-06-26 15:00:51",
    "created_at": "2017-06-26 15:00:51",
    "id": 2,
    "products": [
        {
            "id": 1,
            "name": "Développement sur mesure",
            "hour_amount": "20.0",
            "description": "Développement d'une fonctionnalité sur mesure.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "2",
                "product_id": "1",
                "qte": "2"
            }
        },
        {
            "id": 2,
            "name": "Design & Graphisme",
            "hour_amount": "25.0",
            "description": "Réalisation de flyers ou d'affiches.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "2",
                "product_id": "2",
                "qte": "8"
            }
        },
        {
            "id": 3,
            "name": "Web design",
            "hour_amount": "40.0",
            "description": "Création d'une maquette sur mesure respectant la charte graphique.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "2",
                "product_id": "3",
                "qte": "4"
            }
        },
        {
            "id": 4,
            "name": "SEO",
            "hour_amount": "32.0",
            "description": "Mise en place d'une stratégie de référencement naturel.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "2",
                "product_id": "4",
                "qte": "1"
            }
        }
    ]
}
```

**GET /api/offers**

Return a list of all offers in the database.

```
[
    {
        "id": 1,
        "name": "DEVIS site web",
        "client_name": "Migros",
        "description": "Offre pour une boutique en ligne",
        "created_at": "2017-06-26 14:47:20",
        "updated_at": "2017-06-26 14:47:20"
    }
]
```

**GET /api/offers/{id}**

Return a complete offer with all informations (quantity is in the pivot object):

```
{
    "id": 1,
    "name": "DEVIS site web",
    "client_name": "Migros",
    "description": "Offre pour une boutique en ligne",
    "created_at": "2017-06-26 14:47:20",
    "updated_at": "2017-06-26 14:47:20",
    "products": [
        {
            "id": 1,
            "name": "Développement sur mesure",
            "hour_amount": "20.0",
            "description": "Développement d'une fonctionnalité sur mesure.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "1",
                "product_id": "1",
                "qte": "2"
            }
        },
        {
            "id": 2,
            "name": "Design & Graphisme",
            "hour_amount": "25.0",
            "description": "Réalisation de flyers ou d'affiches.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "1",
                "product_id": "2",
                "qte": "8"
            }
        },
        {
            "id": 3,
            "name": "Web design",
            "hour_amount": "40.0",
            "description": "Création d'une maquette sur mesure respectant la charte graphique.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "1",
                "product_id": "3",
                "qte": "4"
            }
        },
        {
            "id": 4,
            "name": "SEO",
            "hour_amount": "32.0",
            "description": "Mise en place d'une stratégie de référencement naturel.",
            "created_at": "2017-06-26 14:47:17",
            "updated_at": "2017-06-26 14:47:17",
            "pivot": {
                "offer_id": "1",
                "product_id": "4",
                "qte": "1"
            }
        }
    ]
}
```

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).
