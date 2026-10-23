# Flight API

A small PHP API that picks two movies to fit a flight. Send the flight length in minutes, and it returns two movies whose runtimes add up to exactly that duration.

## How it works

1. Send a `POST` request with the flight length in minutes.
2. The API checks the movie runtimes against that length.
3. If two movies add up to the flight length, it returns their runtimes. Otherwise it says no match was found.

## Usage

**Endpoint:** `api.php` (POST only)

**Request body**

```json
{
  "flightlength": 120
}
```

**Example response**

```
Numbers: 60 , 60
```

**No match**

```
No movies fitting the flight duration.
```

Any non-POST request returns `Invalid request method`.

## Run it locally

1. Install PHP 7.4 or newer.
2. Clone the repo and start the built-in server:
   ```bash
   git clone https://github.com/kevalicious/Flightapi.git
   cd Flightapi
   php -S localhost:8000
   ```
3. In Postman, send a `POST` to `http://localhost:8000/api.php` with a raw JSON body like the one above.

Or with curl:

```bash
curl -X POST http://localhost:8000/api.php \
  -H "Content-Type: application/json" \
  -d '{"flightlength": 120}'
```

## Current limitations

- Movie runtimes are hardcoded in `api.php`: `[60, 30, 20, 60, 60, 60]`.
- Only the pairs (1st + 2nd), (3rd + 4th) and (5th + 6th) are checked, not every possible combination.
- Responses are plain text, not JSON.

## Roadmap

- [ ] Check all possible movie pairs
- [ ] Return JSON with movie titles and runtimes
- [ ] Load movies from a database or file
- [ ] Validate input and return proper HTTP status codes

## Author

Built by [@kevalicious](https://github.com/kevalicious)