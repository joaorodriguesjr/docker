#!/usr/bin/env sh

case ${1} in
  'up'    ) docker-compose --file docker/compose.yml --project-name CHANGEME up --detach  ; exit ;;
  'down'  ) docker-compose --file docker/compose.yml --project-name CHANGEME down         ; exit ;;
  'shell' ) docker-compose --file docker/compose.yml --project-name CHANGEME exec ${2} sh ; exit ;;
esac

echo ''
echo 'Commands:'
echo '  up      Put all services up'
echo '  down    Put all services down'
echo '  shell   Get a shell to a specific service'
echo ''
