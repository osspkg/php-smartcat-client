SHELL=/bin/bash

load:
	curl -o ./swagger.json https://smartcat.com/api/methods/v1/swagger.json

build:
	docker run --rm -v ${PWD}:/local --user 1000:1000 \
 		openapitools/openapi-generator-cli generate \
		-i /local/swagger.json \
		--skip-validate-spec \
		-c /local/config.yaml \
		-g php -o /local/tmp

clean:
	rm -rf ./tmp

copy:
	rsync -r --progress ./tmp/src/ ./src/


gen: build copy clean