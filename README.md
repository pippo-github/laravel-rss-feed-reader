# Laravel RSS feed reader 

## Project description

This project allows to get news via gooogle news RSS file, to use the features, go to the news item of your interest, click to select it, then press the 'Alt' key to bring up the button that points to the link of the news.

The data is taken from the RSS Feed and then saved locally in the table: "**rss_table**" of the db: "**rss-db**"

*The empty db structure is provided, for a quicker use by restoring the db, file to use: **rss-db.sql***

**The database table is cleared at each application start**

Below is the list of dependencies and tools it needs for its operation.


<br>
<br>
<br>
<br>

## Descrizione progetto

Questo progetto permette di ricevere notizie tramite il file RSS di google news, per utilizzare le funzionalità, vai sulla notizia di tuo interesse, cliccala per selezionarla, quindi premi il tasto 'Alt' per far apparire il pulsante che punta al collegamento della notizia notizia.

I dati vengono prelevati da Feed RSS e poi sono salvati in locale nella tabella: "rss_table" del db: "rss-db"
*viene fornita la struttura del db vuota, per un utilizzo piu' rapido attraverso il restore del db, file da utilizzare: **rss-db.sql***

**La tabella del db è azzerata ad ogni avvio dell'applicazione**

Segue l'elenco delle dipendenze e dei tools di cui l'applicazione necessita per il suo funzionamento.

<br>
<br>

***Tools***


* db MySQL, server, db e table


<br>



***project dependecy***

```
$composer install
$npm install
$php artisan key:generate
```

***resource compilation***

```
$npm run dev
```


<br>
<br>
<br>

developed by Giuseppe Tarallo, London 2023

<br>
<br>

web: https://www.dev-ita.it <br>

git: https://github.com/pippo-github <br>

