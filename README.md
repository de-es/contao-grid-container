# contao-grid-container

`de-es/contao-grid-container` ist eine Erweiterung für [Contao CMS](https://contao.org/).

Sie stellt, wie auch die Elementgruppe, ein Inhaltselement für verschachtelte Elemente bereit, wobei über ein Select eine (Grid-)Klasse ausgewählt werden. Das ermöglicht es Redakteuren, auf einfachem Wege das Grid zu ändern, ohne mit CSS-Klassen arbeiten zu müssen.

Es wird in der Erweiterung **kein CSS** für das Grid im Frontend und Backend mitgeliefert. Hier kann auf eine eigene Lösung oder eine Framework-Lösung zurückgegriffen werden.

![grid_container_edit](https://github.com/user-attachments/assets/798bc38d-7428-4318-8a22-d789a85c8a17)

![grid_container_list](https://github.com/user-attachments/assets/1fec7366-fa0a-4b3e-bb7f-db05ae5e1015)

## Konfiguration

Die zur Auswahl stehenden Klassen können in der Datei `config/config.yaml` konfiguriert werden:

```
contao_grid_container:
    classes:
        - my-custom-grid-container-class-1
        - my-custom-grid-container-class-2
        - my-custom-grid-container-class-3
```

Wenn im Backend nicht nur der Klassennamen, sondern eine Beschreibung angezeigt werden soll, kann diese als Übersetzung, z.B. für `de` in der Datei `translations/grid_container.de.yaml`, gepflegt werden:

```
my-custom-grid-container-class-1: 'Meine Container-Klasse 1'
my-custom-grid-container-class-2: 'Meine Container-Klasse 2'
my-custom-grid-container-class-3: 'Meine Container-Klasse 3'
```
